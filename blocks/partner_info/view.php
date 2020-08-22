<?php defined('C5_EXECUTE') or die(_("Access Denied.")); 
  $logo_f = \File::getByID($logo);
?>

<div class="container partner-info">
  <div class="row">
    <div class="col-xs-4 col-md-2">
      <?php if (is_object($logo_f)) { ?>
        <img src='<?= $logo_f->getUrl() ?>' alt=<?= $title ?>>
      <?php } ?>
    </div>
    <div class="col-xs-8 col-md-10">
      <a href="/">
        <icon class="close"></icon>
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <h1><?= $title ?></h1>
    </div>
    <div class="col-xs-8">
      <?= $info ?>
    </div>
  </div>
</div>
