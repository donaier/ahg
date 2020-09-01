<?php

namespace Concrete\Package\Ahg\Block\PostInfo;

use Concrete\Core\Block\BlockController;
use Concrete\Core\Page\PageList;
use Concrete\Core\Editor\LinkAbstractor;
use Core;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends BlockController
{
  protected $btTable = "btPostInfo";
  protected $btInterfaceWidth = "700";
  protected $btInterfaceHeight = "480";
  protected $btDefaultSet = 'basic';

  public function getBlockTypeName() {
    return t('Bericht Info');
  }

  public function getBlockTypeDescription() {
    return t('Enthält die Infos der Berichte für die Darstellung im Block "Berichte"');
  }
}
