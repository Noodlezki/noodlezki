<? use Roots\Sage\Wrapper; ?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <? get_template_part('snippets/head'); ?>
  <body <? body_class(); ?>>
    <? if (IS_PRODUCTION) : ?>
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-55009677-1', 'auto');
        ga('send', 'pageview');
      </script>
    <? endif; ?>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?
      do_action('before_header');
      get_template_part('snippets/header');
      do_action('after_header');

      ?><div class="wrapper content container"><?
      include Wrapper\template_path();
      ?></div><?

      do_action('before_footer');
      get_template_part('snippets/footer');
      wp_footer();
      do_action('after_footer')
    ?>
  </body>
</html>
