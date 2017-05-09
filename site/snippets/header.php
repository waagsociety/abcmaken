<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $page->title()->html() ?> - <?php echo $site->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <script src="https://use.typekit.net/zgm8ukn.js"></script>
  <script>try{Typekit.load({ async: false });}catch(e){}</script>
  <link rel="canonical" href="<?= $page->url() ?>">
  <link rel="alternate" hreflang="en" href="en" />
  <?php echo css('assets/css/main.css') ?>
  <?php snippet('seo') ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js"></script>
</head>
<body class="<?= $page->uid() ?>">
<?php snippet('menu') ?>
<script>
	// init controller
  var controller = new ScrollMagic.Controller();
</script>
<div class="animation-container">
  <?php snippet('video-modal') ?>
