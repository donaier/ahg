<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage() ?>">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://use.typekit.net/qlp1jmu.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/bootstrap-modified.css">
  <?php echo $html->css($view->getStylesheet('main.less')) ?>
  <?php
  View::element('header_required', [
    'pageTitle' => isset($pageTitle) ? $pageTitle : '',
    'pageDescription' => isset($pageDescription) ? $pageDescription : '',
    'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''
  ]);
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="<?php echo $c->getPageWrapperClass()?>">
