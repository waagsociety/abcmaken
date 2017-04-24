<header class="article-header">
  <!-- Check if page has a video -->
  <?php if($page->video()): ?>
    <video class="bg-video" autoplay loop muted style="background-image: url(<?= $page->contentURL() . '/' . $page->cover() ?>);">
      <source src="<?= $page->video()->url() ?>" type=video/webm>
    </video>
  <!-- no video available show image -->
  <?php else: ?>
    <div class="bg" style="background-image: url(<?= $page->contentURL() . '/' . $page->cover() ?>);"></div>
  <?php endif ?>

  <div class="blur-layer"></div>

  <div class="intro-arrow">
    <div class="content">
      <p>Leer meer over de letter <?= $page->title() ?></p>
    </div>

    <a href="#avontuur" class="mouse-down">
      <div class="bullet">
      </div>
    </a>
  </div>
</header>

<div class="intro-text">
  <div class="inner">
    <h1><?= $page->title() ?></h1>
      <p>
        <?php foreach($page->sections()->toStructure() as $section): ?>
          <a href="<?php echo $page->url() ?>#<?php echo strtolower(preg_replace("/[^A-Za-z0-9]/", '-', $section->anchor())); ?>"><?= $section->title() ?></a>
        <?php endforeach ?>
      </p>
  </div>
</div>
<script>
		// build scene
    <?php if($page->video()): ?>
  		var scene = new ScrollMagic.Scene({
  			triggerHook: "onLeave",
        duration: 300
  		})
  		.setTween(".bg-video", {'filter':'blur(20px)'}) // trigger a TweenMax.to tween
  		.addTo(controller);
    <?php else: ?>
      var scene = new ScrollMagic.Scene({
        triggerHook: "onLeave",
        duration: 300
      })
      .setTween(".bg", {'filter':'blur(20px)'}) // trigger a TweenMax.to tween
      .addTo(controller);
    <?php endif ?>

    var scene = new ScrollMagic.Scene({
			triggerHook: "onLeave",
      duration: 800
		})
		.setTween(".blur-layer", {opacity: 0.8}) // trigger a TweenMax.to tween
		.addTo(controller);

    var scene = new ScrollMagic.Scene({
			triggerHook: "onLeave",
      duration: 100
		})
		.setTween(".intro-arrow", {opacity: 0, scale: 0.9}) // trigger a TweenMax.to tween
		.addTo(controller);
</script>
