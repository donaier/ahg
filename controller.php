<?php 

namespace Concrete\Package\Ahg;

use Package;

class Controller extends Package
{
    protected $pkgHandle = 'ahg'; 
    protected $appVersionRequired = '5.7.5.6';
    protected $pkgVersion = '0.0.1';

    public function getPackageDescription()
    {
        return t("allerhand im glarnerland");
    }

    public function getPackageName()
    {
        return t("ahg");
    }

    public function install()
    {
        $pkg = parent::install();

        $this->install_single_pages($pkg);
    }

    public function uninstall()
    {
        $pkg = parent::uninstall();
    }

    function install_single_pages($pkg)
    {
        // $directoryDefault = SinglePage::add('/dashboard/sample_package/', $pkg);
        // $directoryDefault->update(array('cName' => t('Sample Package'), 'cDescription' => t('Sample Package')));
    }

}