<?php 
  defined('C5_EXECUTE') or die(_("Access Denied.")); 
  
  print Core::make('helper/concrete/ui')->tabs(array(
    array('info', "Info", true),
    array('content', "Inhalt"),
  ));
?>

<div id="ccm-tab-content-info" class="ccm-tab-content">
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
