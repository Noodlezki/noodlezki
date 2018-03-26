<?php
  $thumbnail_url = has_post_thumbnail() ? the_post_thumbnail_url : get_stylesheet_directory_uri() . '/assets/images/default.jpeg';
?>
<header class="banner" role="banner" style="background-image: url(<?= $thumbnail_url; ?>)">;
  <div class="container">
    <h1 class="post-title"><?php the_title(); ?></h1>
  </div>
</header>
