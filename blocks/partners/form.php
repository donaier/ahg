<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<div class="form-group">
  <label class="control-label" for="top_site">Unter welcher Seite sind die Partner/Geschäfte?</label>
  <select name="top_site">
    <?php foreach ($pages as $page) { ?>
      <option value="<?=$page->cID?>" <?= $page->cID == $top_site ? 'selected' : ''?>><?=$page->getCollectionName()?></option>
    <?php } ?>
  </select>
</div>

<div class="form-group">
  <label class="control-label" for="einsatzQ">Text "Einsatz"</label>
  <input type="text" name="einsatzQ">
</div>

<div class="form-group">
  <label class="control-label" for="einkaufQ">Text "Einkauf"</label>
  <input type="text" name="einkaufQ">
</div>

<div class="form-group">
  <label class="control-label" for="gemeinschaftQ">Text "Gemeinschaft"</label>
  <input type="text" name="gemeinschaftQ">
</div>