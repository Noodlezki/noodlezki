<header class="banner" role="banner">
  <div class="header-bar">
    <div class="container">
      <img id="brand-logo" src="<?= get_stylesheet_directory_uri(); ?>/assets/images/logo2.png" />
      <h1 id="brand-title"><a href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
      <div id="header-contact">
        <h4 class="header-contact-child">Phone: <a href="mailto:">0123 465 7890</a></h4>
        <h4 class="header-contact-child">Email: <a href="mailto:">contact@aa.com</a></h4>
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
