<div id="participate">
  <div class="participate-heading">
  
    <button class="btn active" data-tab=".post">Bericht erstellen</button>
    <button class="btn" data-tab=".event">Event erfassen</button>
    <button class="btn" data-tab=".partner">Partner werden</button>
  </div>
  <div class="tab-content post active">
    <form enctype="multipart/form-data" data-type="post" action="<?= $this->action('participate_post'); ?>" method="post">
      <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
  
      <div class="row">
        <div class="col-md-6">
          <div class="form-group presence-required">
            <label class="control-label" for="title">Titel</label>
            <input type="text" class="form-control" name="title" value="<?php echo $title?>">
          </div>
          <div class="form-group presence-required">
            <label class="control-label" for="subtitle">Untertitel</label>
            <input type="text" class="form-control" name="subtitle" value="<?php echo $subtitle?>">
          </div>
          <div class="form-group presence-required">
            <label class="control-label" for="author">Author</label>
            <input type="text" class="form-control" name="author" value="<?php echo $author?>">
          </div>
          <div class="form-group presence-required">
            <label class="control-label" for="date">Datum</label>
            <?= Core::make('helper/form/date_time')->date('date', $date); ?>
          </div>
        </div>
      </div>
    
      <div class="row spacer-top">
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">Bild links</label>
            <input type="file" id="image_l" name="image_l" accept="image/png, image/jpeg, image/jpg">
          </div>
          <div class="form-group presence-required">
            <label class="control-label">Titel links</label>
            <input type="text" class="form-control" name="title_l" value="<?php echo $title_l ?>">
          </div>
          <div class="form-group presence-required">
            <label class="control-label">Text links</label>
            <?php
              $editor = Core::make('editor');
              echo $editor->outputBlockEditModeEditor('text_l_post', $text_l);
            ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">Bild rechts</label>
            <input type="file" id="image_r" name="image_r" accept="image/png, image/jpeg, image/jpg">
          </div>
          <div class="form-group">
            <label class="control-label">Titel rechts</label>
            <input type="text" class="form-control" name="title_r" value="<?php echo $title_r ?>">
          </div>
          <div class="form-group">
            <label class="control-label">Text rechts</label>
            <?php
              $editor = Core::make('editor');
              echo $editor->outputBlockEditModeEditor('text_r_post', $text_r);
            ?>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="alert alert-danger danger-purple" role="alert">
          Fülle mindestens die markierten Felder aus.
        </div>
        <button class="btn" type="submit">Speichern</button>
      </div>
    </form>
  </div>
  <div class="tab-content event">
    <form enctype="multipart/form-data" data-type="event" action="<?= $this->action('participate_event'); ?>" method="post">
      <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
      <div class="form-group presence-required">
        <label class="control-label" for="title">Titel</label>
        <input type="text" class="form-control" name="title" value="<?php echo $title?>">
      </div>

      <div class="form-group presence-required">
        <label class="control-label" for="subtitle">Untertitel</label>
        <input type="text" class="form-control" name="subtitle" value="<?php echo $subtitle?>">
      </div>

      <div class="form-group presence-required">
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

      <div class="form-group presence-required">
        <label class="control-label" for="place_text">Ort (Text)</label>
        <input type="text" class="form-control" name="place_text" value="<?php echo $place_text?>">
      </div>

      <div class="form-group">
        <label class="control-label" for="place_link">Ort (Link)</label>
        <input type="text" class="form-control" name="place_link" value="<?php echo $place_link?>">
      </div>
      <div class="row spacer-top">
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">Bild links</label>
            <input type="file" id="image_l" name="image_l" accept="image/png, image/jpeg, image/jpg">
          </div>
          <div class="form-group presence-required">
            <label class="control-label">Titel links</label>
            <input type="text" class="form-control" name="title_l" value="<?php echo $title_l ?>">
          </div>
          <div class="form-group presence-required">
            <label class="control-label">Text links</label>
            <?php
              $editor = Core::make('editor');
              echo $editor->outputBlockEditModeEditor('text_l', $text_l);
            ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">Bild rechts</label>
            <input type="file" id="image_r" name="image_r" accept="image/png, image/jpeg, image/jpg">
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
      </div>
      <div class="form-group">
        <div class="alert alert-danger danger-purple" role="alert">
          Fülle mindestens die markierten Felder aus.
        </div>
        <button class="btn" type="submit">Speichern</button>
      </div>
    </form>
  </div>
  <div class="tab-content partner">
    <p>
      bald...
      <br><br>
      solange bitte noch bei <a href="/kontakt">Kontakt</a> kucken.
    </p>
  </div>
</div>
