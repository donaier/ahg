<?php

namespace Concrete\Package\Ahg\Block\PartnerInfo;

use Concrete\Core\Block\BlockController;
use Concrete\Core\Page\PageList;
use Concrete\Core\Editor\LinkAbstractor;
use Core;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends BlockController
{
    protected $btTable = "btPartnerInfo";
    protected $btInterfaceWidth = "700";
    protected $btInterfaceHeight = "480";
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

    public function save($args)
    {
        $args['info'] = LinkAbstractor::translateTo($args['info']);
        $args['logo'] = ($args['logo'] != '') ? intval($args['logo']) : 0;
        $args['einsatz'] = empty($args['einsatz']) ? 0 : 1;
        $args['einkauf'] = empty($args['einkauf']) ? 0 : 1;
        $args['gemeinschaft'] = empty($args['gemeinschaft']) ? 0 : 1;
        parent::save($args);
    }

    public function view()
    {
        $this->set('info', LinkAbstractor::translateFrom($this->info));
    }

    public function edit()
    {
        $this->set('info', LinkAbstractor::translateFrom($this->info));
    }

    public function getInfo()
    {
        return LinkAbstractor::translateFromEditMode($this->info);
    }
}
