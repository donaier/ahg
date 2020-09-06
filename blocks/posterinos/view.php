<?php
  defined('C5_EXECUTE') or die(_("Access Denied."));
  $link_target = Loader::helper('navigation')->getLinkToCollection($page);
?>

<div class="posterinos">
  <h1><?= $title ?></h1>
  <div class="posterinos-container">
    <?php foreach ($posterinos as $post) {
      $post_link  = Loader::helper('navigation')->getLinkToCollection($post['page']); ?>

      <div class="posterino">
        <a href="<?= $post_link ?>">
          <?= $post['title'] ?>
        </a>
        <p><?= $post['subtitle'] ?></p>
      </div>
    <?php } ?>
  </div>
  <a href="<?= $link_target ?>">
    <?= $link_text ?>
  </a>
</div>
