<?php snippet('header') ?>

  <header class="article-header">
    <div class="bg" style="background-image: url(<?= $page->contentURL() . '/' . $page->cover() ?>);"></div>
    <h1 class="intro-letter vh_font-size15"><?= $page->title() ?></h1>
    
    <a class="mouse-btn">
      <svg width="35" height="79"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#i:mouse"></use></svg>
    </a>

    <?php snippet('article-nav') ?>
  </header>

  <main class="main" role="main">
    <?php foreach($page->sections()->toStructure() as $section): ?>
      <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
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
