<? /* Used to render single posts */ ?>

<aside class="sidebar col-md-3 col-sm-4 col-xs-12" role="complementary">
  <?php include(locate_template('snippets/sidebar.php')); ?>
</aside><!-- /.sidebar -->

<main class="main sidebar-primary col-md-9 col-sm-8 col-xs-12" role="main">

  <?php the_post(); ?>
  <h2><? the_title(); ?></h2>

  <article <?php post_class(); ?>>
      <? if (has_post_thumbnail()): ?>
        <div class="thumbnail" style="background-image: url( <?= the_post_thumbnail_url; ?> ); "></div>
      <? endif; ?>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
  </article>

</main>
