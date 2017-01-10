<article <?php post_class(); ?>>
  <header class="article-header">
    <? if (has_post_thumbnail()) : ?>
      <? $thumbnail_url = get_the_post_thumbnail_url();
      else :
        $dog = (get_the_ID() % 3) + 1;
        $thumbnail_url = get_stylesheet_directory_uri().'/assets/images/default'.$dog.'.jpg';
      ?>
    <? endif; ?>
    <a href="<?php the_permalink(); ?>">
      <div class="article-header-image" style="background-image: url( <?= $thumbnail_url; ?> );"></div>
      <h6 class="article-meta pull-right"><?php the_time('F jS, Y') ?></h6>
      <h3 class="thumbnail-caption entry-title"><?php the_title(); ?></h3>
    </a>
  </header>
  <div class="entry-content">
    <?php the_excerpt(); ?>
  </div>
</article>
