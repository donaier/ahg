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

  public function view() {
    $page = \Page::getByID($this->top_site, 'ACTIVE');
    $post_page_ids = $page->getCollectionChildrenArray();
    $key = 0;

    foreach ($post_page_ids as $post_page_id) {
      $post_page = \Page::getByID($post_page_id, 'ACTIVE');

      if (($info_block_id = array_search('post_info', array_column($post_page->getBlocks(), 'btHandle'))) !== false) {
        $b = $post_page->getBlocks()[$info_block_id]->getInstance();

        if ($b->date < date("Y-m-d H:i:s")) {
          $post['date'] = $b->date;
          $post['title'] = $b->title;
          $post['subtitle'] = $b->subtitle;
          // $post['post_author'] = $b->author;

          $post['page'] = $post_page;
          $posts[] = $post;
          $post_order[] = [$b->date, $key];

          $key++;
          if (sizeof($posts) >= 10) { break; }
        }
      }
    }
    arsort($posts);

    $this->set('posterinos', $posts);
    $this->set('page', $page);
    $this->set('link_text', $link_text);
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
