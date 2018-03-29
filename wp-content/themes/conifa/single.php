<? /* Used to render single posts */ ?>

<main class="main" role="main">

  <? /* What to do if no post is found */ ?>

  <?php if ( ! have_posts()) : ?>
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found.', 'sage'); ?>
    </div>
  <?php endif; ?>

  <? /* and if post IS found... */ ?>

  <?php while (have_posts()) : the_post(); ?>
    <?php
      $menuItems = array(
        array('type' => 'website', 'icon' => 'globe', 'name' => 'Website'),
        array('type' => 'twitter', 'icon' => 'twitter', 'name' => 'Twitter'),
        array('type' => 'facebook', 'icon' => 'facebook', 'name' => 'Facebook'),
        array('type' => 'wiki', 'icon' => 'wikipedia-w', 'name' => 'Wikipedia'),
        array('type' => 'conifa_link', 'icon' => 'soccer-ball-o', 'name' => 'ConIFA Profile'),
      );
      $teamImg = htmlentities(the_title(null, null, false));
      $teamImg = str_replace(' ', '_', $teamImg);
      $teamImg = str_replace('&eacute;', 'e', $teamImg);
    ?>
    <article <?php post_class(); ?>>
      <header>
      </header>
      <div class="entry-content">
        <div class="team-sidebar">
          <div class="sidebar__image-wrapper">
            <img class="sidebar__image" src="<?= get_stylesheet_directory_uri() . "/assets/flags/$teamImg.png"; ?>" />
          </div>
          <ul class="sidebar__menu">
            <?php foreach ($menuItems as $menuItem) :
              $item = get_field($menuItem['type']);
              if ($item) : ?>
                <li class="sidebar__menu__item">
                  <a class="sidebar__menu__link" href="<?= $item; ?>">
                    <i class="fa fa-<?= $menuItem['icon']; ?>" aria-hidden="true"></i>
                    <span class="sidebar__menu__item__span"><?= $menuItem['name']; ?></span>
                  </a>
                </li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php the_content(); ?>
      </div>
      <footer>
      </footer>
    </article>
  <?php endwhile; ?>

</main>
