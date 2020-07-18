<?php

defined('C5_EXECUTE') or die(_("Access Denied."));

?>


<div class="form-group">
  <label class="control-label" for="top_site">Unter welcher Seite sind die Partner/Geschäfte?</label>
  <!-- <input type="text" class="form-control" name="top_site" value="<?php echo $top_site?>"> -->

  <select name="top_site">
    <?php 
    foreach ($pages as $page) {
    ?>
      <option value="<?=$page->cID?>"><?=$page->getCollectionName()?></option>
    <?php
    }
    ?>
  </select>
</div>
