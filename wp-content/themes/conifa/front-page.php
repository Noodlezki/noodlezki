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
    array_push($groups[$group],
      array(
        'title' => the_title(null, null, false),
        'permalink' => get_permalink()
      ));
  endwhile;
  ksort($groups);
?>

<main class="main main--front" role="main">
  <div class="front-page__video-container">

    <video autoplay loop muted class="front-page__video">
      <source src="<?= $video; ?>" />
    </video>

    <h1 class="front-page__title">A Fans' Guide to the Teams at the 2018 ConIFA World Cup</h1>

    <?php foreach ($groups as $group => $teams) :
      usort($teams, function ($item1, $item2) {
        return $item1['title'] <=> $item2['title'];
      });
    ?>
      <div class="menu-group menu-group--<?= ord($group) - 64; ?>">
        <h3 class="menu-group__title">Group <?= $group; ?></h3>
        <ul class="menu-group__menu">
          <?php foreach ($teams as $team) : ?>
            <?php add_team($team['title'], $team['permalink']); ?>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endforeach; ?>
    
  </div>
</main>
