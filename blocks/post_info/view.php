<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<div class="container post-info">
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
    <p class="subtitle"><strong><?= $subtitle ?></strong></p>
    <p><?= date('d. F Y', strtotime($date)) ?>, <?= $author ?></p>
  </div>
  </div>
</div>
