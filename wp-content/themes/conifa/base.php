<?
use Roots\Sage\Wrapper;
?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <? 
      get_template_part('snippets/head'); 
  ?>
  <body <? body_class(); ?>>
  <!--[if lt IE 9]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
    </div>
  <![endif]-->
  
  <?php $analytics = getenv('ENVIRONMENT') === 'prod'; ?>
  <?php if ($analytics) : ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPZSBHM"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <?php endif; ?>

  <?
    if (is_front_page()) :
      include Wrapper\template_path();
    else :
  ?>
  <?
      do_action('before_header');
      // Executes get_header action. This will use default header.php file from wp_includes if it can't find one. We don't need it for now. 
      // do_action('get_header');
      get_template_part('snippets/header');
      do_action('after_header');

      ?><div class="content container"><?
      include Wrapper\template_path();
      ?></div><?

      do_action('before_footer');
      // Executes get_footer action. This will use default footer.php file from wp_includes if it can't find one. We don't need it for now. 
      // do_action('get_footer');
      get_template_part('snippets/footer');
      // Executes wp_footer action. Some plugins/theme developers may add their own actins to the wp_footer hook
      wp_footer();
      do_action('after_footer')
    ?>
  <? endif; ?>
  </body>
</html>
