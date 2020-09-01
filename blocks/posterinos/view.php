<?php defined('C5_EXECUTE') or die(_("Access Denied.")) ?>

<?php
  $page = \Page::getByID($top_site, 'ACTIVE');
  $link_target = Loader::helper('navigation')->getLinkToCollection($page);
  $sub_page_ids = $page->getCollectionChildrenArray();
?>

<div class="posterinos">
  <h1><?= $title ?></h1>
  <div class="posterinos-container">
    <?php foreach ($sub_page_ids as $page_id) {
      $post_page = \Page::getByID($page_id, 'ACTIVE');
      $post_link  = Loader::helper('navigation')->getLinkToCollection($post_page);

      if (($info_block_id = array_search('post_info', array_column($post_page->getBlocks(), 'btHandle'))) !== false) {
        $b = $post_page->getBlocks()[$info_block_id]->getInstance();
        $post_title = $b->title;
        $post_subtitle = $b->subtitle;
        ?>
        <div class="posterino">
          <a href="<?= $post_link ?>">
            <?= $post_title ?>
          </a>
          <p><?= $post_subtitle ?></p>
        </div>      
      <?php } ?>
    <?php } ?>
  </div>
  <a href="<?= $link_target ?>">
    <?= $link_text ?>
  </a>
</div>
