<footer class="site-footer">
  <div class="container">
    <span id="footer-text">
      Contact Me
      <br />
      <!-- Email -->
      <a href="mailto:twatamoron@outlook.com"><i class="fa fa-2x fa-envelope-o"></i></a>
      <!-- Medium -->
      <a href="https://medium.com/@twatamoron"><i class="fa fa-2x fa-medium"></i></a>
      <!-- Instagram -->
      <a href="https://instagram.com/twatamoron"><i class="fa fa-2x fa-instagram"></i></a>
      <!-- twitter -->
      <a href="https://www.twitter.com/twatamoron"><i class="fa fa-2x fa-twitter"></i></a>
      <? $first_year = '2017'; $fy = $first_year; ?>
      <br />
      Copyright &copy <?= $fy; ?><?php echo date('Y') == $fy ? '' : '-' . date('y'); ?>.
      All rights reserved.
    </span>
  </div>
</footer>
