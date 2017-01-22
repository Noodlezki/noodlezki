<footer>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">

      <h6><?= bloginfo(); ?></h6>
        <p class="footer-contact-child">Phone: <a><?= get_phone(); ?></a></p>
        <? $email = get_email(); ?>
        <p class="footer-contact-child">Email: <a href="mailto: <?= $email; ?>"><?= $email; ?></a></p>
        <p>Follow us on social media</p>
        <p class="footer-socials">
          <a href="https://www.facebook.com/recoveryguide/"><i class="fa fa-facebook-official fa-2x"></i></a>
          <a href="https://www.twitter.com/recoveryguide/"><i class="fa fa-twitter fa-2x"></i></a>
          <a href="https://www.linkedin.com/recoveryguide/"><i class="fa fa-linkedin fa-2x"></i></a>
        </p>
        <!-- <p>Copyright &#38;copy 2016<?php echo date('Y') == '2016' ? '' : '&#45;' . date('y'); ?> -->

      </div>
    </div>
  </div>
</footer>
