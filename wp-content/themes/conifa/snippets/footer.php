<footer class="footer" role="footer">
  <? $email = "noodlezki@gmail.com"; ?>
  <? $first_year = '2018'; ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">

      <h6>Contact Me: <a href="mailto:<?= $email; ?>"><?= $email; ?></a></h6>

      <h6>This site is in no way affiliated with either ConIFA or the sponsors of the 2018 ConIFA World Football Cup.</h6>
      <h6>All views expressed throughout this website are my own, and for that I can only apologise.</h6>

      <span class="copyright">
        Copyright &copy <?= $first_year; ?><?php echo date('Y') == $first_year ? '' : '-' . date('y'); ?>.
        All rights reserved.
      </span>

      </div>
    </div>
  </div>
</footer>
