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
      <a href="<?= esc_url(home_url('/')); ?>">
      <? if (is_archive() || is_home()) : ?>
        <span class="brand-white-link">
      The&nbspWorld According to&nbspa&nbspMoron.
        </span>
      <? endif; ?>
      </a>
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
