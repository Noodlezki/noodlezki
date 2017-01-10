module.exports = function(grunt){
  // Official DataPress Gruntfile Structure v1.0
  var debug = true;

  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-coffee');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    clean: [
      "dist/",
    ],

    // ----------------------------------------
    copy: {
      main: {
        files : [
          { "dist/scripts/jquery.js" : "bower_components/jquery/dist/jquery.min.js" },
          { "dist/scripts/bootstrap.js" : "bower_components/bootstrap/dist/js/bootstrap.min.js" },
          { "dist/scripts/masonry.js" : "bower_components/masonry/dist/masonry.pkgd.min.js" },
          { "dist/styles/fontawesome.css" : "bower_components/fontawesome/css/font-awesome.min.css" },
          { expand: true, flatten: true, src: ['bower_components/fontawesome/font/*'], dest: 'dist/font/', filter: 'isFile'},
        ]
      },
    },
    less: {
      main: {
        files: {
          'dist/styles/main.css': 'less/main.less'
        },
        options: {
          compress: !debug,
          sourceMap: debug,
          sourceMapFilename: "dist/styles/main.css.map",
          sourceMapURL: "/wp-content/themes/datapress-base/dist/styles/main.css.map",
          sourceMapRootpath: "/wp-content/themes/datapress-base/",
        }
      },
    },
    watch: {
      less: {
        files: [
          'less/**/*.less',
        ],
        tasks: ['less']
      },
    },
  });

  grunt.registerTask('default', [
    'clean',
    'copy',
    'less',
  ]);
};
