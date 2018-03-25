<?php
function add_team($team) {
  $teamImg = str_replace(' ', '_', $team);
  $teamImg = str_replace('&eacute', 'e', $teamImg);
?>
  <li class="menu-group__item">
    <img class="menu-group__flag menu-group__flag--left" src="<?= get_stylesheet_directory_uri() . "/assets/flags/$teamImg.png"; ?>" />
    <a class="menu-group__link"><?= $team ?></a>
    <img class="menu-group__flag menu-group__flag--right" src="<?= get_stylesheet_directory_uri() . "/assets/flags/$teamImg.png"; ?>" />
  </li>
<?php
}
?>
