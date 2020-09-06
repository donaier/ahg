<?php
  defined('C5_EXECUTE') or die(_("Access Denied."));
  $link_target = Loader::helper('navigation')->getLinkToCollection($page);
?>

<div class="posterinos">
  <h1><?= $title ?></h1>
  <div class="posterinos-container">
    <?php foreach ($posterinos as $post) {
      $post_link  = Loader::helper('navigation')->getLinkToCollection($post['page']); ?>

      <a href="<?= $post_link ?>">
        <div class="posterino">
          <div class="row">
            <div class="col-xs-12">
              <strong class="cl-accent"><?= $post['title'] ?></strong>
              <p><?= $post['subtitle'] ?></p>
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
