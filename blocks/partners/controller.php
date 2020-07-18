<?php

namespace Concrete\Package\Ahg\Block\Partners;

use Concrete\Core\Block\BlockController;
use Concrete\Core\Page\PageList;
use Core;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends BlockController
{
    protected $btTable = "btPartners";
    protected $btInterfaceWidth = "350";
    protected $btInterfaceHeight = "240";
    protected $btDefaultSet = 'basic';

    public function getBlockTypeName()
    {
        return t('Partner');
    }

    public function getBlockTypeDescription()
    {
        return t('Zeigt alle Partner(-seiten) unterhalb der gewählten Seite an.');
    }

    public function add()
    {
        $list = new PageList();
        $this->set('pages', $list->getResults());
    }

    public function save($data)
    {
        parent::save($data);
    }
}
