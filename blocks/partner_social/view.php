<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<div class="partner-social">
  <div class="row">
    <?php if ($facebook) { ?>
      <div class="col-xs-3 col-md-1">
        <a href="<?= $facebook ?>" class="partner-social facebook" target="_blank"></a>      
      </div>
    <?php } ?>
    <?php if ($instagram) { ?>
      <div class="col-xs-3 col-md-1">
        <a href="<?= $instagram ?>" class="partner-social insta" target="_blank"></a>
      </div>
    <?php } ?>
  </div>
</div>
