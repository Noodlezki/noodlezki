<?php
function add_team($team, $link) {
  $teamImg = htmlentities($team);
  $teamImg = str_replace(' ', '_', $teamImg);
  $teamImg = str_replace('&eacute;', 'e', $teamImg);
?>
  <a href="<?= $link; ?>">
    <li class="menu-group__item">
      <img class="menu-group__flag menu-group__flag--left" src="<?= get_stylesheet_directory_uri() . "/assets/flags/$teamImg.png"; ?>" />
      <span class="menu-group__link"><?= $team ?></span>
      <img class="menu-group__flag menu-group__flag--right" src="<?= get_stylesheet_directory_uri() . "/assets/flags/$teamImg.png"; ?>" />
      <i class="menu-group__arrow fa fa-angle-down" aria-hidden="true"></i>
    </li>
  </a>
<?php
}
?>
