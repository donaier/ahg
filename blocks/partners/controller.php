<?php

namespace Concrete\Package\Ahg\Block\Partners;

use Concrete\Core\Block\BlockController;
use Concrete\Core\Page\PageList;
use Concrete\Core\Editor\LinkAbstractor;
use Core;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends BlockController
{
  protected $btTable = "btPartners";
  protected $btInterfaceWidth = "700";
  protected $btInterfaceHeight = "480";
  protected $btDefaultSet = 'basic';

  public function getBlockTypeName() {
    return t('Partner');
  }

  public function getBlockTypeDescription() {
    return t('Zeigt alle Partner(-seiten) unterhalb der gewählten Seite an.');
  }

  public function add() {
    $list = new PageList();
    $this->set('pages', $list->getResults());
  }

  public function edit() {
    $list = new PageList();
    $this->set('pages', $list->getResults());
    $this->set('info', LinkAbstractor::translateFrom($this->info));
  }

  public function save($data) {
    $args['info'] = LinkAbstractor::translateTo($args['info']);

    parent::save($data);
  }

  public function view()
  {
      $this->set('info', LinkAbstractor::translateFrom($this->info));
  }

  public function getInfo()
  {
      return LinkAbstractor::translateFromEditMode($this->info);
  }
}
