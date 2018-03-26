<? 
  require_once('snippets/menu-item.php');
  $video = get_stylesheet_directory_uri() . '/assets/bg.mp4';

  $query = new WP_Query(array(
      'post_type' => 'teams',
      'post_status' => 'publish',
      'posts_per_page' => -1
  ));
  
  $groups = array();
  $i = 0;
  while ($query->have_posts()) : $query->the_post();
    $i = $i + 1;
    $group = get_field('group');

    if (!array_key_exists($group, $groups)) {
      $groups[$group] = array();
    }
    array_push($groups[$group], the_title(null, null, false));
  endwhile;
  ksort($groups);
?>

<main class="main main--front" role="main">
  <div class="front-page__video-container">

    <?php foreach ($groups as $group => $teams) : sort($teams); ?>
      <div class="menu-group menu-group--<?= ord($group) - 64; ?>">
        <ul class="menu-group__menu">
          <?php foreach ($teams as $team) : ?>
            <?php add_team($team); ?>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endforeach; ?>

    <video autoplay loop muted class="front-page__video">
      <source src="<?= $video; ?>" />
    </video>

  </div>
</main>
