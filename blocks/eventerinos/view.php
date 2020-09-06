<?php
  defined('C5_EXECUTE') or die(_("Access Denied."));
  $link_target = Loader::helper('navigation')->getLinkToCollection($page);
?>

<div class="eventerinos">
  <h1><?= $title ?></h1>
  <div class="eventerinos-container">
    <?php foreach ($eventerinos as $event) {
      $event_link  = Loader::helper('navigation')->getLinkToCollection($event['page']); ?>

      <a href="<?= $event_link ?>">
        <div class="eventerino">
          <div class="row">
            <div class="col-xs-4 col-md-3">
              <strong class="cl-accent"><?= date('D. d.m.', strtotime($event['date'])) ?></strong>
            </div>
            <div class="col-xs-8 col-md-9">
              <strong><?= $event['title'] ?></strong>
              <p><?= $event['subtitle'] ?></p>
            </div>
          </div>
        </div>
      </a>
    <?php } ?>
  </div>
  <a href="<?= $link_target ?>">
    <?= $link_text ?>
  </a>
</div>
