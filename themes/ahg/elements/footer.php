<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<footer>
  <section>
    <div class="container">
      <div class="row">
          <div class="col-xs-3 col-md-2">
            <a href="/kontakt">Kontakt</a>
          </div>
          <div class="col-xs-3 col-md-2">
            <a href="/impressum">Impressum</a>
          </div>
          <div class="col-xs-3 col-md-2"></div>
          <div class="col-xs-3 col-md-2 login-link">
            <?php echo Core::make('helper/navigation')->getLogInOutLink() ?>
          </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <a href="https://www.instagram.com/allerhandgl/" target="_blank" class="footer-social insta"></a>
        </div>
        <div class="col-xs-3">
          <a href="https://www.facebook.com/allerhandgl/" target="_blank" class="footer-social facebook"></a>
        </div>
        <div class="col-xs-3">
          <a href="https://www.youtube.com/channel/UCR3HHN2mivJWIXpi2iMllhA" target="_blank" class="footer-social youtube"></a>
        </div>
        <div class="col-xs-3">
          <a href="https://open.spotify.com/show/4CZWsSh6rVQhyY7LjxVOEb?si=3ALVvo5fRGG0WiPJqrj7EQ&nd=1" target="_blank" class="footer-social spotify"></a>
        </div>
      </div>
    </div>
  </section>
</footer>


<?php $this->inc('elements/footer_bottom.php');?>
