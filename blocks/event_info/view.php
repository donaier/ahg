<?php 
  defined('C5_EXECUTE') or die(_("Access Denied."));
  $cal_link = 
    "https://calendar.google.com/calendar/r/eventedit?text=".urlencode($title).
    "&dates=".date('Ymd', strtotime($date_start)).'T'.date('His', strtotime($date_start)).'/'.date('Ymd', strtotime($date_end)).'T'.date('His', strtotime($date_end)).
    "&details=".urlencode($subtitle);
?>

<div class="container event-info">
  <div class="row">
    <div class="col-xs-8 col-md-4">
      <h1 class='blue'><?= $title ?></h1>
    </div>
    <div class="col-xs-4 col-md-8">
      <a href="/">
      <icon class="close"></icon>
    </a>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-4">
    <a href=<?= $cal_link ?> target="_blank">
      <?php if (date('l d. F Y', strtotime($date_start)) == date('l d. F Y', strtotime($date_end))) { ?>
        <p>
          <strong><?= date('l d. F Y', strtotime($date_start)) ?></strong>
          <br>
          <strong><?= date('H:i', strtotime($date_start)) ?> Uhr - <?= date('H:i', strtotime($date_end)) ?> Uhr</strong>
        </p>
      <?php } else { ?>
        <p>
          <strong>von: <?= date('l d. F Y, H:i', strtotime($date_start)) ?></strong>
          <br>
          <strong>bis: <?= date('l d. F Y, H:i', strtotime($date_end)) ?></strong>
        </p>
      <?php } ?>
    </a>
    <?php if (!empty(trim($place_link))) { ?>
      <a href="<?= $place_link ?>" target="_blank">
        <strong><?= $place_text ?></strong>
      </a>
    <?php } else { ?>
      <strong><?= $place_text ?></strong>
    <?php } ?>
  </div>
  </div>
</div>
<div class="row content">
  <div class="col-12 col-sm-6">
    <?php if (isset($image_l)) { ?>
      <img src="<?= File::getByID($image_l)->getURL() ?>" alt="">
    <?php } ?>
    <strong><?= $title_l ?></strong>
    <?= $text_l ?>
  </div>
  <div class="col-12 col-sm-6">
    <?php if (isset($image_r)) { ?>
      <img src="<?= File::getByID($image_r)->getURL() ?>" alt="">
    <?php } ?>
    <strong><?= $title_r ?></strong>
    <?= $text_r ?>
  </div>
</div>
