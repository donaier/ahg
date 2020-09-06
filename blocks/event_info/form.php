<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<div class="form-group">
  <label class="control-label" for="title">Titel</label>
  <input type="text" class="form-control" name="title" value="<?php echo $title?>">
</div>

<div class="form-group">
  <label class="control-label" for="subtitle">Untertitel</label>
  <input type="text" class="form-control" name="subtitle" value="<?php echo $subtitle?>">
</div>

<div class="form-group">
  <div class="row">
    <div class="form-col col-xs-6">
      <label class="control-label" for="date_start">Von</label>
      <?= Core::make('helper/form/date_time')->datetime('date_start', $date_start); ?>
    </div>
    <div class="form-col col-xs-6">
      <label class="control-label" for="date_end">Bis</label>
      <?= Core::make('helper/form/date_time')->datetime('date_end', $date_end); ?>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="control-label" for="place_text">Ort (Text)</label>
  <input type="text" class="form-control" name="place_text" value="<?php echo $place_text?>">
</div>

<div class="form-group">
  <label class="control-label" for="place_link">Ort (Link)</label>
  <input type="text" class="form-control" name="place_link" value="<?php echo $place_link?>">
</div>
