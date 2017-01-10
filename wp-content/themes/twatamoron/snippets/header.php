<? if (is_single()) : ?>
  <? if (has_post_thumbnail()) : ?>
    <header class="banner" role="banner" style="background-image: url(<?= the_post_thumbnail_url() ?>)">;
  <? else : ?>
    <header class="banner" role="banner" style="background-image: url(../wp-content/themes/twatamoron/dist/images/default<?= (get_the_ID() % 3) + 1; ?>.jpg);">;
  <? endif; ?>
<? else : ?>
  <header class="banner" role="banner">
<? endif; ?>
  <div class="container">
    <h1 id="brand-title" class="pull-right">
        <? if (is_single()) : ?>
          <?= the_title(); ?>
        <? else : ?>
            <a href="<?= esc_url(home_url('/')); ?>">
            <? if (!is_archive()) : ?>
              <span class="brand-white-link">
            <? endif; ?>
            <?php // bloginfo('name'); ?>
            The&nbspWorld According to&nbspa&nbspMoron.
            <? if (is_archive()) : ?>
              </span>
            <? endif; ?>
            </a>
        <? endif; ?>
    </h1>
  </div>
</header>
  <? if (is_single()) : ?>
    <div class="breadcrumb">
      <div class="container">
        <a class="breadcrumb-home-link" href="<?= esc_url(home_url('/')); ?>">
          <h4 class="pull-left">&larr; Back to Home</h4>
        </a>
        <h6 class="article-meta pull-right"><?php the_time('F jS, Y') ?></h4>
      </div>
    </div>
  <? endif; ?>
