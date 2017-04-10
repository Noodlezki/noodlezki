<div id="sidebar">
  <ul>
    <li><a href="<?= esc_url(home_url('/')); ?>">Home</a></li>
  </ul>

  <h4>Moron through time</h4>
  <ul>
    <?php wp_get_archives('type=monthly'); ?>
  </ul>

  <!-- <h4>Moron through space</h4> -->
  <!-- <ul class="categorised"> -->
    <? $categories = wp_list_categories('echo=0&&sort_column=name&optioncount=0&hierarchical=1&depth=2'); ?>
    <? $list = get_categories(); ?>

  <!-- </ul> -->

  <h4>Trips</h4>
  <ul>
    <li>Europe 2014</li>
  <!--   <li>China 2014</li> -->
  <!--   <li>World Cup 2014</li> -->
  <!--   <li>South America 2014</li> -->
  <!--   <li>London to Kazakhstan 2015</li> -->
  <!--   <li>Xinjiang Province 2015</li> -->
  <!--   <li>Tibetan Autonomous Region 2015</li> -->
  <!--   <li>Vietnam 2015</li> -->
  <!--   <li>India 2016</li> -->
  </ul>

  <!-- <h4>Highlights</h4> -->

  <!-- <h4>Galleries</h4> -->
  
  <!-- <h4>Friends &#38; Useful Links</h4> -->
  <!-- <ul> -->
  <!--   <li><a href="http://www.onelittlebackpcker.com/">One Little Backpacker</a></li> -->
  <!--   <li><a href="http://www.seat61.com/">The Man in Seat 61</a></li> -->
  <!-- </ul> -->
</div>
