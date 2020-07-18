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
    } ?>
</div>