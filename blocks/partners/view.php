<?php defined('C5_EXECUTE') or die(_("Access Denied.")) ?>

<?php
  $page = \Page::getByID($top_site, 'ACTIVE');
  $sub_page_ids = $page->getCollectionChildrenArray();
?>

<div>
  <?php foreach ($sub_page_ids as $page_id) {
    $page = \Page::getByID($page_id, 'ACTIVE');

    $link_target  = Loader::helper('navigation')->getLinkToCollection($page);
    $link_text    = $page->getCollectionName();
    $color        = sprintf('#%06X', mt_rand(0, 0xFFFFFF));

    if (($info_block_id = array_search('partner_info', array_column($page->getBlocks(), 'btHandle'))) !== false) {
      $color = $page->getBlocks()[$info_block_id]->getInstance()->color;
    }

    echo "<a href='$link_target' class='button btn btn-lg' style='background: $color; color: black'>$link_text</a>";
  } ?>
</div>