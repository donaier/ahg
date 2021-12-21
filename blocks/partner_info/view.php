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
    <div class="col-xs-12 col-md-4">
      <h1><?= $title ?></h1>
      <div class="info-container">
        <?= $info ?>
      </div>
    </div>
  </div>
  <div class="row content">
    <div class="col-12 col-sm-6">
      <?php if (is_object(File::getByID($image_l))) { ?>
        <img src="<?= File::getByID($image_l)->getURL() ?>" alt="">
      <?php } ?>
      <strong><?= $title_l ?></strong>
      <?= $text_l ?>
    </div>
    <div class="col-12 col-sm-6">
      <?php if (is_object(File::getByID($image_r))) { ?>
        <img src="<?= File::getByID($image_r)->getURL() ?>" alt="">
      <?php } ?>
      <strong><?= $title_r ?></strong>
      <?= $text_r ?>
    </div>
  </div>
  <div class="row contact">
    <div class="col-sm-12">
      <?= $contact ?>
    </div>
  </div>
  <div class="row social">
    <div class="col-xs-3 col-sm-1">
      <a href="<?= $facebook ?>" class="partner-social facebook" target="_blank"></a>
    </div>
    <div class="col-xs-3 col-sm-1">
      <a href="<?= $instagram ?>" class="partner-social instagram" target="_blank"></a>
    </div>
    <div class="col-xs-3 col-sm-1">
      <a href="<?= $youtube ?>" class="partner-social youtube" target="_blank"></a>
    </div>
    <div class="col-xs-3 col-sm-1">
      <a href="<?= $spotify ?>" class="partner-social spotify" target="_blank"></a>
    </div>
  </div>
</div>
