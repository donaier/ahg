<?php defined('C5_EXECUTE') or die(_("Access Denied.")) ?>

<?php
  $page = \Page::getByID($top_site, 'ACTIVE');
  $sub_page_ids = $page->getCollectionChildrenArray();
?>

<div class="partners">
  <div class="row filter-q">
    <div class="col-xs-12">
      <button class="filter-button btn active" filter-data="alle" onclick="applyQ(this, 'alle');">
        Startsiite
      </button>
    </div>
    <?php if (isset($einsatzQ)) { ?>
      <div class="col-xs-12">
        <button class="filter-button btn" filter-data="einsatz" onclick="applyQ(this, 'einsatz');">
          <?= $einsatzQ ?>
        </button>
      </div>
    <?php } ?>
    <?php if (isset($einkaufQ)) { ?>
      <div class="col-xs-12">
        <button class="filter-button btn" filter-data="einkauf" onclick="applyQ(this, 'einkauf');">
          <?= $einkaufQ ?>
        </button>
      </div>
    <?php } ?>
    <?php if (isset($gemeinschaftQ)) { ?>
      <div class="col-xs-12">
        <button class="filter-button btn" filter-data="gemeinschaft" onclick="applyQ(this, 'gemeinschaft');">
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
            <div class="partner-logo" style="background-image: url(<?= $logo_url ?>)"></div>
          </a>
          <div class="mini-info">
            <strong><?= $b->title ?></strong>
          </div>
        </div>
      <?php } ?>
    <?php } ?>
  </div>

  <script>
    function applyQ(btn, q) {
      $(btn).parents('.filter-q').find('.filter-button').each(function(){$(this).removeClass('active');})
      $(btn).addClass('active')
      if (q == 'alle') {
        $.each($('.partner'), function( index, value ) {
          $(value).show()
          $(value).removeClass('filtered')
        });
      } else {
        $.each($('.partner'), function( index, value ) {
          if (!$(value).attr('class').includes(q)) {
            $(value).hide()
            $(value).removeClass('filtered')
          } else {
            $(value).show()
            $(value).addClass('filtered')
          }
        });
      }
    }
  </script>
</div>
