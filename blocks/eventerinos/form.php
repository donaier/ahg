<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<div class="form-group">
  <label class="control-label" for="top_site">Unter welcher Seite sind die Events?</label>
  <select class="form-control" name="top_site">
    <?php foreach ($pages as $page) { ?>
      <option value="<?=$page->cID?>" <?= $page->cID == $top_site ? 'selected' : ''?>><?=$page->getCollectionName()?></option>
    <?php } ?>
  </select>
</div>

<div class="form-group">
  <label class="control-label" for="title">Titel</label>
  <input type="text" class="form-control" name="title" value="<?= $title ?>">
</div>

<div class="form-group">
  <label class="control-label" for="link_text">Link Text</label>
  <input type="text" class="form-control" name="link_text" value="<?= $link_text ?>">
</div>

<div class="form-group">
  <label class="control-label" for="max_events">Max. angezeigte Einträge (leer heisst alle anzeigen)</label>
  <input type="number" class="form-control" name="max_events" value="<?= $max_events ?>">
</div>
