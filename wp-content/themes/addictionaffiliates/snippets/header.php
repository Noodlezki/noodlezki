<header class="banner" role="banner">
  <div class="header-bar">
    <div class="container">
      <!-- <a href=<?= esc_url(home_url('/')); ?> -->
      <img id="brand-logo" src="<?= get_stylesheet_directory_uri(); ?>/assets/images/logo.png" />
      <!-- </a> -->
      <div id="header-contact">
        <? $email = get_email(); ?>
          <h4 class="text-center">
            Phone: <a><?= get_phone(); ?></a>
            <br class="visible-xs" />
            Email: <a href="mailto:<?= $email; ?>"><?= $email; ?></a>
          </h4>
        </div>
      </div>
    </div>
  </div>
<?
    do_action('before_nav');
    get_template_part('snippets/nav');
    do_action('after_nav');

    // do_action('before_breadcrumbs');
    // get_template_part('snippets/breadcrumbs');
    // do_action('after_breadcrumbs');
?>
</header>
