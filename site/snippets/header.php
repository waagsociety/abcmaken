<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $page->title()->html() ?> - <?php echo $site->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <link rel="canonical" href="<?= $page->url() ?>">
  <link rel="alternate" hreflang="en" href="en" />
  <?php echo css('assets/css/main.css') ?>
  <?php snippet('seo') ?>
</head>
<body class="<?= $page->uid() ?>">
