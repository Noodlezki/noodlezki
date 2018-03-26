<?php
  $thumbnail_url = has_post_thumbnail() ? the_post_thumbnail_url : get_stylesheet_directory_uri() . '/assets/img/default.jpeg';
?>
<header class="banner" role="banner" style="background-image: url(<?= $thumbnail_url; ?>)">;
  <div class="container">
    <h2 class="post-title"><?php the_title(); ?></h2>
  </div>
<?
    do_action('before_nav');
    get_template_part('snippets/nav');
    do_action('after_nav');

    do_action('before_breadcrumbs');
    get_template_part('snippets/breadcrumbs');
    do_action('after_breadcrumbs');
?>
</header>
