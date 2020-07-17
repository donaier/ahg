<?php defined('C5_EXECUTE') or die("Access Denied.");

$footerSiteTitle = new GlobalArea('Footer Site Title');
$footerSiteTitleBlocks = $footerSiteTitle->getTotalBlocksInArea();

$footerSocial = new GlobalArea('Footer Social');
$footerSocialBlocks = $footerSocial->getTotalBlocksInArea();

$displayFirstSection = $footerSiteTitleBlocks > 0 || $footerSocialBlocks > 0 || $c->isEditMode();
?>

<footer id="footer-theme">
    <?php
    if ($displayFirstSection) {
        ?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <?php
                        $a = new GlobalArea('Footer Contact');
                        $a->display();
                        ?>
                    </div>
                    <div class="col-sm-3">
                        <?php
                        $a = new GlobalArea('Footer Social');
                        $a->display();
                        ?>
                        <?php echo Core::make('helper/navigation')->getLogInOutLink() ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
    ?>
</footer>


<?php $this->inc('elements/footer_bottom.php');?>
