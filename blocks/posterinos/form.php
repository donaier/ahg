<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<div class="form-group">
  <label class="control-label" for="top_site">Unter welcher Seite sind die Berichte?</label>
  <br>
  <select name="top_site">
    <?php foreach ($pages as $page) { ?>
      <option value="<?=$page->cID?>" <?= $page->cID == $top_site ? 'selected' : ''?>><?=$page->getCollectionName()?></option>
    <?php } ?>
  </select>
</div>

<div class="form-group">
  <label class="control-label" for="title">Titel</label>
  <br>
  <input type="text" name="title">
</div>

<div class="form-group">
  <label class="control-label" for="link_text">Link Text</label>
  <br>
  <input type="text" name="link_text">
</div>
