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
    $posts = [];

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
        }
      }
    }
    if (isset($this->top_site_events)){
      $page_events = \Page::getByID($this->top_site_events, 'ACTIVE');
      $event_page_ids = $page_events->getCollectionChildrenArray();
      foreach ($event_page_ids as $event_page_id) {
        $event_page = \Page::getByID($event_page_id, 'ACTIVE');

        if (($info_block_id = array_search('event_info', array_column($event_page->getBlocks(), 'btHandle'))) !== false) {
          $b = $event_page->getBlocks()[$info_block_id]->getInstance();

          if ($b->date_start < date("Y-m-d H:i:s")) {
            $post['date'] = $b->date_start;
            $post['title'] = $b->title;
            $post['subtitle'] = $b->subtitle;
            // $post['post_author'] = $b->author;
            $post['page'] = $event_page;

            $posts[] = $post;
          }
        }
      }
    }
    arsort($posts);

    if (isset($this->max_posts)) {
      $posts = array_slice($posts, 0, $this->max_posts);
    }

    $this->set('posterinos', $posts);
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
    $data['max_posts'] = trim($data['max_posts']) === '' ? null : $data['max_posts'];

    parent::save($data);
  }
}
