<?php defined('C5_EXECUTE') or die(_("Access Denied."));
  $logo_f = false;
  if ($logo) {
    $logo_f = \File::getByID($logo);
  }

  print Core::make('helper/concrete/ui')->tabs(array(
    array('info', "Info", true),
    array('content', "Inhalt"),
    array('contact', 'Kontakt & Social')
  ));
?>

<div id="ccm-tab-content-info" class="ccm-tab-content">
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
</div>

<div id="ccm-tab-content-content" class="ccm-tab-content">
  <div class="form-group">
    <label class="control-label">Bild links</label>
    <?php
      $service = Core::make('helper/concrete/file_manager');
      print $service->image('image_l', 'image_l', 'Bild auswählen', $image_l);
    ?>
  </div>
  <div class="form-group">
    <label class="control-label">Titel links</label>
    <input type="text" class="form-control" name="title_l" value="<?php echo $title_l ?>">
  </div>
  <div class="form-group">
    <label class="control-label">Text links</label>
    <?php
      $editor = Core::make('editor');
      echo $editor->outputBlockEditModeEditor('text_l', $text_l);
    ?>
  </div>
  <div class="form-group">
    <label class="control-label">Bild rechts</label>
    <?php
      $service = Core::make('helper/concrete/file_manager');
      print $service->image('image_r', 'image_r', 'Bild auswählen', $image_r);
    ?>
  </div>
  <div class="form-group">
    <label class="control-label">Titel rechts</label>
    <input type="text" class="form-control" name="title_r" value="<?php echo $title_r ?>">
  </div>
  <div class="form-group">
    <label class="control-label">Text rechts</label>
    <?php
      $editor = Core::make('editor');
      echo $editor->outputBlockEditModeEditor('text_r', $text_r);
    ?>
  </div>
</div>

<div id="ccm-tab-content-contact" class="ccm-tab-content">
  <div class="form-group">
    <label class="control-label">Text Kontakt</label>
    <?php
      $editor = Core::make('editor');
      echo $editor->outputBlockEditModeEditor('contact', $contact);
    ?>
  </div>
  <div class="form-group">
    <label class="control-label" for="facebook">Facebook</label>
    <input type="text" class="form-control" name="facebook" value="<?php echo $facebook?>">
  </div>

  <div class="form-group">
    <label class="control-label" for="instagram">Instagram</label>
    <input type="text" class="form-control" name="instagram" value="<?php echo $instagram?>">
  </div>
  <div class="form-group">
    <label class="control-label" for="facebook">Youtube</label>
    <input type="text" class="form-control" name="youtube" value="<?php echo $youtube?>">
  </div>

  <div class="form-group">
    <label class="control-label" for="instagram">Spotify</label>
    <input type="text" class="form-control" name="spotify" value="<?php echo $spotify?>">
  </div>
</div>
