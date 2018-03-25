<? 
  require_once('snippets/menu-item.php');
  $video = get_stylesheet_directory_uri() . '/assets/bg.mp4';
?>

<main class="main main--front" role="main">
  <div class="front-page__video-container">

    <div class="menu-group menu-group--1">
      <ul class="menu-group__menu">
        <?php add_team('Barawa'); ?>
        <?php add_team('Ellan Vannin'); ?>
        <?php add_team('Western Armenia'); ?>
        <?php add_team('Cascadia'); ?>
      </ul>
    </div>

    <div class="menu-group menu-group--2">
      <ul class="menu-group__menu">
        <?php add_team('Tibet'); ?>
        <?php add_team('Abkhazia'); ?>
        <?php add_team('Northern Cyprus'); ?>
        <?php add_team('Felvid&eacutek'); ?>
      </ul>
    </div>

    <div class="menu-group menu-group--3">
      <ul class="menu-group__menu">
        <?php add_team('Padania'); ?>
        <?php add_team('Sz&eacutekely Land'); ?>
        <?php add_team('Matabeleland'); ?>
        <?php add_team('Tuvalu'); ?>
      </ul>
    </div>

    <div class="menu-group menu-group--4">
      <ul class="menu-group__menu">
        <?php add_team('United Koreans of Japan'); ?>
        <?php add_team('Kabylie'); ?>
        <?php add_team('Tamil Eelam'); ?>
        <?php add_team('Panjab'); ?>
      </ul>
    </div>

    <video autoplay loop muted class="front-page__video">
      <source src="<?= $video; ?>" />
    </video>

  </div>
</main>
