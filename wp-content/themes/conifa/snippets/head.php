<head>
  <?php $analytics = getenv('ENVIRONMENT') === 'prod'; ?>
  <?php if ($analytics) : ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-55009677-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-55009677-3');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NPZSBHM');</script>
    <!-- End Google Tag Manager -->
  <?php endif; ?>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="alternate" type="application/rss+xml" title="<?= get_bloginfo('name'); ?> News Feed" href="<?= esc_url(get_feed_link()); ?>" />

  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/style.css" />

  <? get_template_part("snippets/favicon"); ?>

  <? wp_head(); ?>
</head>
