<?php
// Required. Do not edit.
require_once('lib/init.php');

// --- Custom theme code past this line ---
define("IS_PRODUCTION", get_option("siteurl")=="http://your.site.url");

// Needed for article-list.php
function get_the_post_thumbnail_src($img) {
  return (preg_match('~\bsrc="([^"]++)"~', $img, $matches)) ? $matches[1] : '';
}
function get_the_post_thumbnail_width($img) {
  return (preg_match('~\bwidth="([^"]++)"~', $img, $matches)) ? $matches[1] : '';
}
function get_the_post_thumbnail_height($img) {
  return (preg_match('~\bheight="([^"]++)"~', $img, $matches)) ? $matches[1] : '';
}

function is_site_administrator() {
  if ( ! is_user_logged_in() ) {
    return false;
  }
  $user = wp_get_current_user();
  return in_array("administrator", $user->roles);
}

// --- Don't show admin bar
if ( !is_admin() ) {
  // Don't show the WP bar
  add_filter( 'show_admin_bar', '__return_false' );
}
function custom_excerpt_more() {
  return ' &hellip; <a class="read-more-link" href="' . get_permalink() . '">' . __('Read&nbsp;More&nbsp;&raquo;', 'sage') . '</a>';
}
add_filter('excerpt_more', 'custom_excerpt_more');



function install_custom_post_teams() {
  // creating (registering) the custom type
  register_post_type( 'teams', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
    // let's now add all the options for this post type
    array(
      'labels' => array(
        'name' => 'Teams',
        'singular_name' => 'Team',
        'all_items' => 'All Teams',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Team',
        'edit' => 'Edit',
        'edit_item' => 'Edit Team',
        'new_item' => 'New Team',
        'view_item' => 'View Team',
        'search_items' => 'Search Teams',
        'not_found' => 'Team not found in the database.',
        'not_found_in_trash' => 'Team not foun in trash.',
        'parent_item_colon' => '',
      ), /* end of arrays */
      'description' => 'Teams competing at the 2018 ConIFA World Football Cup',
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'show_ui' => true,
      'query_var' => true,
      'menu_position' => 4,
      'menu_icon' => 'dashicons-groups',  // http://www.kevinleary.net/wordpress-dashicons-list-custom-post-type-icons/ for options
      'has_archive' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      /* the next one is important, it tells what's enabled in the post editor */
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky' ),
    )
  );

  /* this adds your post categories to your custom post type */
  register_taxonomy_for_object_type( 'category', 'teams' );
  /* this adds your post tags to your custom post type */
  register_taxonomy_for_object_type( 'post_tag', 'teams' );
}


add_action( 'init', 'install_custom_post_teams');
