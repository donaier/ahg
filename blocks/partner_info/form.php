<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<div class="form-group">
  <label class="control-label" for="color">
    Farbe (als <a href="https://www.w3schools.com/colors/colors_picker.asp" target="_blank">Hex-Code</a> oder sonstige CSS-kompatible Formate)
  </label>
  
  <input type="text" class="form-control" name="color" value="<?php echo $color?>">
</div>
