<?php defined('C5_EXECUTE') or die(_("Access Denied.")) ?>

<?php
  $page = \Page::getByID($top_site, 'ACTIVE');
  $sub_page_ids = $page->getCollectionChildrenArray();
?>

<div>
  <?php foreach ($sub_page_ids as $page_id) {
    $page = \Page::getByID($page_id, 'ACTIVE');

    echo $page->getCollectionName();
    echo Loader::helper('navigation')->getLinkToCollection($page);

    if (($info_block_id = array_search('partner_info', array_column($page->getBlocks(), 'btHandle'))) !== false) {
      // $info_block = $page->getBlocks()[$info_block_id];
    }
  } ?>
</div>