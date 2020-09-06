<?php 

namespace Concrete\Package\Ahg;

use Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;
use Concrete\Core\Block\BlockType\BlockType;

defined('C5_EXECUTE') or die("Access Denied.");

class Controller extends Package
{
  protected $pkgHandle = 'ahg'; 
  protected $appVersionRequired = '5.7.5.6';
  protected $pkgVersion = '0.0.3.4';

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
    $this->install_single_pages($pkg);
  }

  public function upgrade() {
    parent::upgrade();
    $pkg = Package::getByHandle('ahg');

    $this->install_block_types($pkg);
    $this->install_single_pages($pkg);
  }

  public function uninstall() {
    $pkg = parent::uninstall();
  }

  function install_single_pages($pkg) {
    // $directoryDefault = SinglePage::add('/dashboard/sample_package/', $pkg);
    // $directoryDefault->update(array('cName' => t('Sample Package'), 'cDescription' => t('Sample Package')));
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
