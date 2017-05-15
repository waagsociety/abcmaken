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
  <?php echo js('assets/js/modernizr.js') ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/enquire.js/2.1.6/enquire.min.js"></script>

  <!-- Piwik -->
    <script type="text/javascript">
    var _paq = _paq || [];
    // tracker methods like "setCustomDimension" should be called before "trackPageView"
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
    var u="//stats.waag.org/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '21']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
    })();
    </script>
  <!-- End Piwik Code -->
</head>
<body class="<?= $page->uid() ?>">
<?php snippet('menu') ?>
<script>
	// init controller
  var controller = new ScrollMagic.Controller();
</script>
<div class="animation-container">
  <?php snippet('video-modal') ?>
