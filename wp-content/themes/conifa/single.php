<? /* Used to render single posts */ ?>
<?php
function get_link_for_field($field) {
  $type = $field['type'];
  $item = get_field($type);
  $is_social = ($type === 'facebook' || $type === 'instagram' || $type === 'twitter');
  if ($is_social && strpos($item, $type) === false) {
    return "https://www.$type.com/$item";
  }
  return $item;
}
?>

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
        array('type' => 'instagram', 'icon' => 'instagram', 'name' => 'Instagram'),
        array('type' => 'wiki', 'icon' => 'wikipedia-w', 'name' => 'Wikipedia'),
        array('type' => 'conifa_link', 'icon' => 'soccer-ball-o', 'name' => 'ConIFA Profile'),
      );
      $teamImg = htmlentities(the_title(null, null, false));
      $teamImg = str_replace(' ', '_', $teamImg);
      $teamImg = str_replace('&eacute;', 'e', $teamImg);
      $logo = get_field('logo');
    ?>
    <article <?php post_class(); ?>>
      <header>
      </header>
      <div class="entry-content">
        <div class="team-sidebar">
          <div class="sidebar__images-wrapper">
            <?php if ($logo) : ?>
              <div class="sidebar__image-wrapper sidebar__image-wrapper--left">
                <img class="sidebar__image" src="<?= $logo; ?>" />
              </div>
            <?php endif; ?>
            <div class="sidebar__image-wrapper <?= $logo ? 'sidebar__image-wrapper--right' : ''; ?>">
              <img class="sidebar__image" src="<?= get_stylesheet_directory_uri() . "/assets/flags/$teamImg.png"; ?>" />
            </div>
          </div>
          <ul class="sidebar__menu">
            <?php foreach ($menuItems as $menuItem) :
              $item = get_link_for_field($menuItem);
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
