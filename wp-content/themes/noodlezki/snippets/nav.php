<?php use Roots\Sage\Nav\NavWalker; ?>

<div class="navbar-bar">
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <?php
      if (has_nav_menu('primary_navigation')) :
        // Wordpress will build a nav from menu from 'primary navigation' menu.
        wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'walker'         => new NavWalker(),
          'menu_class'     => 'nav navbar-nav',
        ]);
      endif;
      ?>
    </div>
  </nav>
</div>
