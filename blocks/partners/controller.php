<?php

namespace Concrete\Package\Ahg\Block\Partners;

use Concrete\Core\Block\BlockController;
use Core;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends BlockController
{

    protected $btInterfaceWidth = "350";
    protected $btInterfaceHeight = "240";
    protected $btDefaultSet = 'basic';

    public function getBlockTypeName()
    {
        return t('Partner');
    }

    public function getBlockTypeDescription()
    {
        return t('Zeigt alle Partner unterhalb der Seite "Vereine" an.');
    }
}
