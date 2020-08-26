<?php defined('C5_EXECUTE') or die(_("Access Denied.")) ?>

<?php
  $page = \Page::getByID($top_site, 'ACTIVE');
  $sub_page_ids = $page->getCollectionChildrenArray();
?>

<div class="partners">

  <div class="row filter-q">
    <?php if (isset($einsatzQ)) { ?>
      <div class="col-xs-12">
        <button class="filter-button btn" filter-data="einsatz" onclick="applyQ('einsatz');">
          <?= $einsatzQ ?>
        </button>
      </div>
    <?php } ?>
    <?php if (isset($einkaufQ)) { ?>
      <div class="col-xs-12">
        <button class="filter-button btn" filter-data="einkauf" onclick="applyQ('einkauf');">
          <?= $einkaufQ ?>
        </button>
      </div>
    <?php } ?>
    <?php if (isset($gemeinschaftQ)) { ?>
      <div class="col-xs-12">
        <button class="filter-button btn" filter-data="gemeinschaft" onclick="applyQ('gemeinschaft');">
          <?= $gemeinschaftQ ?>
        </button>
      </div>
    <?php } ?>
  </div>

  <div class="row partner-logos">
    <?php foreach ($sub_page_ids as $page_id) {
      $page = \Page::getByID($page_id, 'ACTIVE');

      $link_target  = Loader::helper('navigation')->getLinkToCollection($page);
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
        } ?>

        <div class="col-xs-4 col-md-2 partner <?= $cat_str ?>">
          <a href="<?= $link_target ?>">
            <img src="<?= $logo_url ?>" alt="">
          </a>
        </div>
      <?php } ?>
    <?php } ?>
  </div>

  <script>
    function applyQ(q) {
      console.log(q)
      $.each($('.partner'), function( index, value ) {
        if (!$(value).attr('class').includes(q)) {
          $(value).hide()
        } else {
          $(value).show()
        }
      });
    }
  </script>
</div>
