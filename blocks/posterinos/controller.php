<?php

namespace Concrete\Package\Ahg\Block\Posterinos;

use Concrete\Core\Block\BlockController;
use Concrete\Core\Page\PageList;
use Core;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends BlockController
{
  protected $btTable = "btPosterinos";
  protected $btInterfaceWidth = "700";
  protected $btInterfaceHeight = "480";
  protected $btDefaultSet = 'basic';

  public function getBlockTypeName() {
    return t('Berichte');
  }

  public function getBlockTypeDescription() {
    return t('Zeigt alle Berichte unterhalb der gewählten Seite an.');
  }

  public function add() {
    $list = new PageList();
    $this->set('pages', $list->getResults());
  }

  public function edit() {
    $list = new PageList();
    $this->set('pages', $list->getResults());
  }

  public function save($data) {
    parent::save($data);
  }
}
