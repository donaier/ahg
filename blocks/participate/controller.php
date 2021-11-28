<?php

namespace Concrete\Package\Ahg\Block\Participate;

use Concrete\Core\Block\BlockController;
use Concrete\Core\Page\PageList;
use Concrete\Core\Editor\LinkAbstractor;
use Core;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends BlockController
{
    // protected $btInterfaceWidth = "1200";
    // protected $btInterfaceHeight = "800";
    protected $btDefaultSet = 'basic';

    public function getBlockTypeName()
    {
        return t('Mitmachen');
    }

    public function getBlockTypeDescription()
    {
        return t('');
    }
}
