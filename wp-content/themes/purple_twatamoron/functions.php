<?php

function get_head()
{
  include('head.php');
}

function get_article($type = NULL)
{
  include('article.php');
}

add_filter( 'the_content', 'remove_width_attribute', 10 );
// add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
  $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
  return $html;
}

?>
