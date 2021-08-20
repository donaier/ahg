<?php

namespace Concrete\Package\Ahg\Block\Eventerinos;

use Concrete\Core\Block\BlockController;
use Concrete\Core\Page\PageList;
use Core;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends BlockController
{
  protected $btTable = "btEventerinos";
  protected $btInterfaceWidth = "700";
  protected $btInterfaceHeight = "480";
  protected $btDefaultSet = 'basic';

  public function getBlockTypeName() {
    return t('Events');
  }

  public function getBlockTypeDescription() {
    return t('Zeigt alle Events unterhalb der gewählten Seite an.');
  }

  public function view() {
    $page = \Page::getByID($this->top_site, 'ACTIVE');
    $event_page_ids = $page->getCollectionChildrenArray();
    $events = [];

    foreach ($event_page_ids as $event_page_id) {
      $event_page = \Page::getByID($event_page_id, 'ACTIVE');

      if (($info_block_id = array_search('event_info', array_column($event_page->getBlocks(), 'btHandle'))) !== false) {
        $b = $event_page->getBlocks()[$info_block_id]->getInstance();

        if ($b->date_start > date("Y-m-d H:i:s")) {
          $event['date'] = $b->date_start;
          $event['title'] = $b->title;
          $event['subtitle'] = $b->subtitle;

          $event['page'] = $event_page;
          $events[] = $event;
        }
      }
    }
    asort($events);

    if (isset($this->max_events)) {
      $events = array_slice($events, 0, $this->max_events);
    }

    $this->set('eventerinos', $events);
    $this->set('page', $page);
    $this->set('link_text', $this->link_text);
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
    $data['max_events'] = trim($data['max_events']) === '' ? null : $data['max_events'];

    parent::save($data);
  }
}
