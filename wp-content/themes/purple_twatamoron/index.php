<?php get_head(); ?>
<div id="wrapper">
  <?php get_header(); ?>
  <div class="container main">
    <?php get_sidebar(); ?>
    <?php if(!have_posts()) : ?>
      <?php get_template_part('no_article.php'); ?>
    <?php else : ?>
      <? $counter = 0; ?>
      <?php while (have_posts()) : the_post(); $counter++; ?>
        <?php if($counter==1) : ?>
          <?php get_article('top'); ?>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>
    <?php $counter=0; if(have_posts()) : while(have_posts()) : the_post(); $counter++; ?>
      <?php if($counter > 1) : ?>
        <?php get_article(); ?>
      <?php endif; ?>
    <?php endwhile; endif; ?>
  </div>
  <?php get_footer(); ?>
</div>
