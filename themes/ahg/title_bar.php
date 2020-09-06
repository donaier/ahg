<?php
defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('elements/header.php');
?>

<main>
  <div class="container title-bar">
    <div class="row">
      <div class="col-xs-4 col-md-2">
        <h1><?= $c->getCollectionName() ?></h1>
      </div>
      <div class="col-xs-8 col-md-10">
        <a href="javascript:history.back()">
          <icon class="close"></icon>
        </a>
      </div>
    </div>
  </div>

  <?php
  $a = new Area('Main');
  $a->enableGridContainer();
  $a->display($c);
  ?>
</main>

<?php
$this->inc('elements/footer.php');
