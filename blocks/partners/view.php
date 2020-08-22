<?php defined('C5_EXECUTE') or die(_("Access Denied.")) ?>

<?php
  $page = \Page::getByID($top_site, 'ACTIVE');
  $sub_page_ids = $page->getCollectionChildrenArray();
?>

<div class="container">
  <div class="row">
    <?php foreach ($sub_page_ids as $page_id) {
      $page = \Page::getByID($page_id, 'ACTIVE');

      $link_target  = Loader::helper('navigation')->getLinkToCollection($page);
      $link_text    = $page->getCollectionName();
      $logo_url = '';
      $cat_str = '';

      if (($info_block_id = array_search('partner_info', array_column($page->getBlocks(), 'btHandle'))) !== false) {
        $b = $page->getBlocks()[$info_block_id]->getInstance();
        if ($b->logo) {
          $logo_url = \File::getByID($b->logo)->getUrl();
        }
        foreach (['einsatz', 'einkauf', 'gemeinschaft'] as $cat) {
          if ($b->$cat) {
            $cat_str .= " $cat";
          }
        }
      }
    ?>

    <div class="col-xs-4 col-md-2 partner <?= $cat_str ?>">
      <a href="<?= $link_target ?>">
        <img src="<?= $logo_url ?>" alt="">
      </a>
    </div>

    <?php } ?>
  </div>
</div>