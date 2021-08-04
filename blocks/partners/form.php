<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<div class="form-group">
  <label class="control-label" for="top_site">Unter welcher Seite sind die Partner/Geschäfte?</label>
  <br>
  <select name="top_site" class="form-control">
    <?php foreach ($pages as $page) { ?>
      <option value="<?=$page->cID?>" <?= $page->cID == $top_site ? 'selected' : ''?>><?=$page->getCollectionName()?></option>
    <?php } ?>
  </select>
</div>

<div class="form-group">
  <label class="control-label" for="einsatzQ">Text "Einsatz"</label>
  <br>
  <input type="text" class="form-control" name="einsatzQ" value="<?php echo $einsatzQ?>">
</div>

<div class="form-group">
  <label class="control-label" for="einkaufQ">Text "Einkauf"</label>
  <br>
  <input type="text" class="form-control" name="einkaufQ" value="<?php echo $einkaufQ?>">
</div>

<div class="form-group">
  <label class="control-label" for="gemeinschaftQ">Text "Gemeinschaft"</label>
  <br>
  <input type="text" class="form-control" name="gemeinschaftQ" value="<?php echo $gemeinschaftQ?>">
</div>

<div class="form-group">
  <div class="control-label">Info</div>
  <?php
    $editor = Core::make('editor');
    echo $editor->outputBlockEditModeEditor('info', $controller->getInfo());
  ?>
</div>
