<? /* Used to render lists of articles - by default the /posts page */ ?>

<? if (have_posts()) : ?>
  <aside class="sidebar col-md-3 col-sm-4 col-xs-12" role="complementary">
    <?php include(locate_template('snippets/sidebar.php')); ?>
  </aside><!-- /.sidebar -->

  <main class="main sidebar-primary col-lg-9 col-md-9 col-sm-8 col-xs-12" role="main">
<? else : ?>
  <main class="main sidebar-primary col-xs-12" role="main">
<? endif; ?>

  <? /* What to do if no post is found */ ?>

 <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found.', 'sage'); ?>
    </div>
  <?php endif; ?>

  <? /* and if post IS found... */ ?>

    <?php 
      while (have_posts()) : the_post();
        include(locate_template('snippets/article-list.php'));
        echo '<hr />';
      endwhile;
    ?>

  <? include(locate_template('snippets/pagination.php')); ?>

</main>
