<footer>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">

        <h6>Addiction Affiliates</h6>
        <p class="footer-contact-child">Phone: <a><?= get_phone(); ?></a></p>
        <? $email = get_email(); ?>
        <p class="footer-contact-child">Email: <a href="mailto: <?= $email; ?>"><?= $email; ?></a></p>
        <!-- <p>Copyright &#38;copy 2016<?php echo date("Y") == "2016" ? "" : "&#45;".date("y"); ?> -->

      </div>
    </div>
  </div>
</footer>
