<?php

namespace Concrete\Package\Ahg\Block\EventInfo;

use Concrete\Core\Block\BlockController;
use Concrete\Core\Page\PageList;
use Concrete\Core\Editor\LinkAbstractor;
use Core;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends BlockController
{
  protected $btTable = "btEventInfo";
  protected $btInterfaceWidth = "1200";
  protected $btInterfaceHeight = "800";
  protected $btDefaultSet = 'basic';

  public function getBlockTypeName() {
    return t('Event Info');
  }

  public function getBlockTypeDescription() {
    return t('Enthält die Infos der Events für die Darstellung im Block "Events"');
  }

  public function save($args)
  {
    $args['date_start'] = Core::make('helper/form/date_time')->translate('date_start');
    $args['date_end'] = Core::make('helper/form/date_time')->translate('date_end');
    parent::save($args);
  }
}
