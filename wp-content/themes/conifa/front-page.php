<? 
  $video = get_stylesheet_directory_uri() . '/assets/bg.mp4';
?>

<main class="main main--front" role="main">
  <div class="front-page__video-container">
    <video autoplay loop muted class="front-page__video">
      <source src="<?= $video; ?>" />
    </video>
  </div>
</main>
