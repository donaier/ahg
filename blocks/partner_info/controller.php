<?php

namespace Concrete\Package\Ahg\Block\PartnerInfo;

use Concrete\Core\Block\BlockController;
use Concrete\Core\Page\PageList;
use Core;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends BlockController
{
    protected $btTable = "btPartnerInfo";
    protected $btInterfaceWidth = "350";
    protected $btInterfaceHeight = "240";
    protected $btDefaultSet = 'basic';

    public function getBlockTypeName()
    {
        return t('Partner Info');
    }

    public function getBlockTypeDescription()
    {
        return t('Enthält die Infos der Partner (Geschäfte?) für die Darstellung im Block "Partner"');
    }

    public function add()
    {
    }

    public function save($data)
    {
        parent::save($data);
    }
}
