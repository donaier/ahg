<?php 

namespace Concrete\Package\Ahg;

use Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;
use Concrete\Core\Block\BlockType\BlockType;
use PageTemplate;

defined('C5_EXECUTE') or die("Access Denied.");

class Controller extends Package
{
  protected $pkgHandle = 'ahg'; 
  protected $appVersionRequired = '5.7.5.6';
  protected $pkgVersion = '0.0.3.11';

  public function getPackageDescription() {
    return t("allerhand im glarnerland");
  }

  public function getPackageName() {
    return t("ahg");
  }

  public function install() {
    $pkg = parent::install();
    Theme::add('ahg', $pkg);

    $this->install_block_types($pkg);
    $this->install_page_templates($pkg);
  }

  public function upgrade() {
    parent::upgrade();
    $pkg = Package::getByHandle('ahg');

    $this->install_block_types($pkg);
    $this->install_page_templates($pkg);
  }

  public function uninstall() {
    $pkg = parent::uninstall();
  }

  function install_page_templates($pkg) {
    $pt = PageTemplate::getByHandle('title_bar');
    if(!is_object($pt)) {
      $pt = PageTemplate::add('title_bar', 'Seitentitel/Schliessen X', FILENAME_PAGE_TEMPLATE_DEFAULT_ICON, $pkg);
    }
  }

  function install_block_types($pkg) {
    foreach (['partners', 'partner_info', 'post_info', 'posterinos', 'event_info', 'eventerinos'] as $btHandle) {
      $bt = BlockType::getByHandle($btHandle);
      if (!is_object($bt)) {
        $bt = BlockType::installBlockTypeFromPackage($btHandle, $pkg);
      }
    }
  }
}
