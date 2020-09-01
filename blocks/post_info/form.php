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
  <label class="control-label" for="author">Author</label>
  <input type="text" class="form-control" name="author" value="<?php echo $author?>">
</div>

<div class="form-group">
  <label class="control-label" for="date">Datum</label>
  <?= Core::make('helper/form/date_time')->date('date', $date); ?>
</div>
