<? /* Used to render single posts */ ?>

<aside class="sidebar" role="complementary">
  <?php include(locate_template('snippets/sidebar.php')); ?>
</aside><!-- /.sidebar -->

<main class="main sidebar-primary" role="main">

  <?php the_post(); ?>

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
