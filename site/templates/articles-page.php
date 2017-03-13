<?php snippet('header') ?>

<?php

  $index = 0;

?>

  <?php snippet('article-nav') ?>
  <header class="article-header">
    <h1 class="intro-letter vh_font-size15"><?= $page->title() ?></h1>
    
    <!-- Check if page has a video -->
    <?php if($page->video()): ?>
      <video class="bg-video" autoplay loop muted style="background-image: url(<?= $page->contentURL() . '/' . $page->cover() ?>);"> 
        <source src="<?= $page->video()->url() ?>" type=video/webm> 
      </video>
    <!-- no video available show image -->
    <?php else: ?>
      <div class="bg" style="background-image: url(<?= $page->contentURL() . '/' . $page->cover() ?>);"></div>
    <?php endif ?>
    
    <a class="mouse-btn">
      <svg width="35" height="79"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#i:mouse"></use></svg>
    </a>
  </header>

  <main class="main" role="main">
    <?php foreach($page->sections()->toStructure() as $section): $index ++ ?>
      <?php snippet('sections/' . $section->_fieldset(), array(
        'data' => $section,
        'index' => $index
      )) ?>
    <?php endforeach ?>
  </main>

  <script type="text/javascript">
    /* hier geen ES6! want dit gaat niet door Babel heen */
	
	
	
	window.resize = window.onmousemove = function(e) {
      var mousecoords = getMousePos(e)
      if (mousecoords.x > 0) {
		var vh = document.querySelector('.article-header').offsetWidth;
		document.querySelector('.intro-letter').style.transform = `translate(${(mousecoords.x * vh) / (50 * 800)}px, ${(mousecoords.y * vh) / (50 * 800)}px)`
        document.querySelector('.bg').style.transform = `translate(-${(mousecoords.x * vh) / (100 * 800)}px, -${(mousecoords.y * vh)/ (60 * 800)}px) scale(1.05)`
      }
    }
  </script>

<?php snippet('footer') ?>
