<?php defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('elements/header_top.php');

?>

<header>
  <div class="container">
    <?php if ($c->getCollectionID() == 1) { ?>
      <div class="row header-content">
        <div class="col-xs-4">
          <a href="/">
            <div class="logo"></div>
          </a>
        </div>
        <div class="col-xs-12">
          <h1>Allerhand im Glarnerland</h1>
        </div>
        <?php
        // $a = new GlobalArea('Header Site Title');
        // $a->display();
        ?>
        <?php
        // $a = new GlobalArea('Header Navigation');
        // $a->display();
        ?>
      </div>
    <?php } ?>
  </div>
</header>
