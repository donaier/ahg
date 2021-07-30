<?php

namespace Concrete\Package\Ahg\Block\PartnerSocial;

use Concrete\Core\Block\BlockController;
use Core;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends BlockController
{
    protected $btTable = "btPartnerSocial";
    protected $btInterfaceWidth = "700";
    protected $btInterfaceHeight = "480";
    protected $btDefaultSet = 'basic';

    public function getBlockTypeName()
    {
        return t('Partner Social');
    }

    public function getBlockTypeDescription()
    {
        return t('Enthält die Social Links der Partner');
    }

    public function add()
    {
    }

    public function save($args)
    {
        parent::save($args);
    }

    public function view()
    {
    }

    public function edit()
    {
    }
}
