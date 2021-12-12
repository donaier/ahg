<?php

namespace Concrete\Package\Ahg\Block\Participate;

use Concrete\Core\Block\BlockController;
use Concrete\Core\File\Importer;
use Concrete\Core\File\Filesystem;
use Concrete\Core\Tree\Node\Node;
use Concrete\Core\Tree\Node\Type\FileFolder;
use Page;
use BlockType;
use Loader;
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

    public function action_participate_post() {
        Loader::library("file/importer");
        $filesystem = new Filesystem();
        $fi = new Importer();
        $folder = FileFolder::getNodeByName('guests');

        if (isset($_FILES['image_l']) && $_FILES['image_l']['error'] == 0) {
            $newFileVersionL = $fi->import($_FILES['image_l']['tmp_name'], $_FILES['image_l']['name']);
            $newFileL = $newFileVersionL->getFile()->getFileNodeObject() ;
            if (is_object($newFileL)) {
                $newFileL->move($folder);
                $fileLID = $newFileVersionL->getFile()->getFileID();
            }
        }
        if (isset($_FILES['image_r']) && $_FILES['image_r']['error'] == 0) {
            $newFileVersionR = $fi->import($_FILES['image_r']['tmp_name'], $_FILES['image_r']['name']);
            $newFileR = $newFileVersionR->getFile()->getFileNodeObject() ;
            if (is_object($newFileR)) {
                $newFileR->move($folder);
                $fileRID = $newFileVersionR->getFile()->getFileID();
            }
        }

        $this->add_preview_block_post($fileLID, $fileRID);

        include 'parts/thanks.php';

        exit;
    }

    public function action_participate_event() {
        Loader::library("file/importer");
        $filesystem = new Filesystem();
        $fi = new Importer();
        $folder = FileFolder::getNodeByName('guests');

        if (isset($_FILES['image_l']) && $_FILES['image_l']['error'] == 0) {
            $newFileVersionL = $fi->import($_FILES['image_l']['tmp_name'], $_FILES['image_l']['name']);
            $newFileL = $newFileVersionL->getFile()->getFileNodeObject() ;
            if (is_object($newFileL)) {
                $newFileL->move($folder);
                $fileLID = $newFileVersionL->getFile()->getFileID();
            }
        }
        if (isset($_FILES['image_r']) && $_FILES['image_r']['error'] == 0) {
            $newFileVersionR = $fi->import($_FILES['image_r']['tmp_name'], $_FILES['image_r']['name']);
            $newFileR = $newFileVersionR->getFile()->getFileNodeObject() ;
            if (is_object($newFileR)) {
                $newFileR->move($folder);
                $fileRID = $newFileVersionR->getFile()->getFileID();
            }
        }

        $this->add_preview_block_event($fileLID, $fileRID);

        include 'parts/thanks.php';

        exit;
    }

    private function add_preview_block_post($fileLID, $fileRID) {
        $page = Page::getByPath('/preview');
        // add page below $page and add the block there
        $pageType = \PageType::getByHandle('page');
        $template = \PageTemplate::getByHandle('full');

        $newPage = $page->add($pageType, array(
            'cName' => $_POST['title'],
            'cHandle ' => urlencode($_POST['title'])
        ), $template);

        $block = BlockType::getByHandle('post_info');
        $data = array(
            'title'         => $_POST['title'],
            'subtitle'      => $_POST['subtitle'],
            'date'          => $_POST['date'],
            'author'        => $_POST['author'],
            'title_l'       => $_POST['title_l'],
            'title_r'       => $_POST['title_r'],
            'text_l'        => $_POST['text_l_post'],
            'text_r'        => $_POST['text_r_post'],
            'image_l'        => $fileLID,
            'image_r'        => $fileRID,
        );
        $newPage->addBlock($block, 'Main', $data);
    }
    private function add_preview_block_event($fileLID, $fileRID) {
        $page = Page::getByPath('/preview');
        // add page below $page and add the block there
        $pageType = \PageType::getByHandle('page');
        $template = \PageTemplate::getByHandle('full');

        $newPage = $page->add($pageType, array(
            'cName' => $_POST['title'],
            'cHandle ' => urlencode($_POST['title'])
        ), $template);

        $block = BlockType::getByHandle('event_info');
        $data = array(
            'title'         => $_POST['title'],
            'subtitle'      => $_POST['subtitle'],
            'date_start'    => $_POST['date_start'],
            'date_end'      => $_POST['date_end'],
            'place_text'    => $_POST['place_text'],
            'place_link'    => $_POST['place_link'],
            'title_l'       => $_POST['title_l'],
            'title_r'       => $_POST['title_r'],
            'text_l'        => $_POST['text_l'],
            'text_r'        => $_POST['text_r'],
            'image_l'        => $fileLID,
            'image_r'        => $fileRID,
        );
        $newPage->addBlock($block, 'Main', $data);
    }
}
