<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<footer>
  <section>
    <div class="container">
      <div class="row">
          <div class="col-xs-4 col-md-2">
            <a href="/kontakt">Kontakt</a>
          </div>
          <div class="col-xs-4 col-md-2">
            <a href="/impressum">Impressum</a>
          </div>
          <div class="col-xs-4 col-md-2 login-link">
            <?php echo Core::make('helper/navigation')->getLogInOutLink() ?>
          </div>
      </div>
    </div>
  </section>
</footer>


<?php $this->inc('elements/footer_bottom.php');?>
