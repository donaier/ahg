<?php defined('C5_EXECUTE') or die(_("Access Denied.")) ?>

<?php
  $link_target = Loader::helper('navigation')->getLinkToCollection($page);
?>

<div class="posterinos">
  <h1><?= $title ?></h1>
  <div class="posterinos-container">
    <?php foreach ($post_order as $post_key) {
      $post = $posterinos[$post_key[1]];
      $post_link  = Loader::helper('navigation')->getLinkToCollection($post['page']); ?>

      <div class="posterino">
        <a href="<?= $post_link ?>">
          <?= $post['title'] ?>
        </a>
        <p><?= $post['subtitle'] ?></p>
        <p><?= $post['date'] ?></p>
      </div>
    <?php } ?>
  </div>
  <a href="<?= $link_target ?>">
    <?= $link_text ?>
  </a>
</div>
