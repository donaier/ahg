<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<footer>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <?php
          // $a = new GlobalArea('Footer Contact');
          // $a->display();
          ?>
        </div>
        <div class="col-sm-3">
          <?php
          // $a = new GlobalArea('Footer Social');
          // $a->display();
          ?>
          <?php echo Core::make('helper/navigation')->getLogInOutLink() ?>
        </div>
      </div>
    </div>
  </section>
</footer>


<?php $this->inc('elements/footer_bottom.php');?>
