<?php
  $thumbnail_url = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_stylesheet_directory_uri() . '/assets/images/default.jpeg';
?>
<header class="banner" role="banner" style="background-image: url(<?= $thumbnail_url; ?>)">
  <div class="banner--cover">
    <div class="container">
      <a href="/"><h1 class="post-title"><?php the_title(); ?></h1></a>
      <a href="/"><h4 class="home-link">&laquo Home</h4></a>
    </div>
  </div>
</header>
