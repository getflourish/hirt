<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?>

</head>
<body>

    <?php snippet('header') ?>
    <main class="main">
    <h1>
        <?php echo $page->title() ?>
    </h1>

    <p>
        <?php echo $page->text()->kirbytext() ?>
    </p>
    </main>

<?php snippet("footer") ?>