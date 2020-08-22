<?php defined('C5_EXECUTE') or die(_("Access Denied."));
  $logo_f = false;
  if ($logo) {
    $logo_f = \File::getByID($logo);
  }
?>

<div class="form-group">
  <label class="control-label" for="title">Titel</label>
  <input type="text" class="form-control" name="title" value="<?php echo $title?>">
</div>

<div class="form-group">
  <label class="control-label">Logo</label>
  <?php
    $service = Core::make('helper/concrete/file_manager');
    print $service->image('logo', 'logo', 'Logo auswählen', $logo_f);
  ?>
</div>

<div class="form-group">
  <div class="control-label">Info</div>
  <?php
    $editor = Core::make('editor');
    echo $editor->outputBlockEditModeEditor('info', $controller->getInfo());
  ?>
</div>

<div class="form-group">
  <label class="control-label">Kategorien (für die Fragen auf Home)</label>
  <ul>
    <li>
      <input type="checkbox" <?php if ($einsatz) { echo 'checked'; }; ?> name="einsatz">
      Einsatz
    </li>
    <li>
      <input type="checkbox" <?php if ($einkauf) { echo 'checked'; }; ?> name="einkauf">
      Einkauf
    </li>
    <li>
      <input type="checkbox" <?php if ($gemeinschaft) { echo 'checked'; }; ?> name="gemeinschaft">
      Gemeinschaft
    </li>
  </ul>
</div>