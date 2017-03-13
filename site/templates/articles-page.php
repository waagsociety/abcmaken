<?php snippet('header') ?>

<?php

  $index = 0;

?>

  <?php snippet('article-nav') ?>
  <header class="article-header">
    <div class="bg" style="background-image: url(<?= $page->contentURL() . '/' . $page->cover() ?>);"></div>
    <h1 class="intro-letter"><?= $page->title() ?></h1>
    
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
    window.onmousemove = (e) => {
      var mousecoords = getMousePos(e)
      if (mousecoords.x > 0) {
        document.querySelector('.intro-letter').style.transform = `translate(${mousecoords.x / 50}px, ${mousecoords.y / 50}px)`
        document.querySelector('.bg').style.transform = `translate(-${mousecoords.x / 100}px, -${mousecoords.y / 30}px) scale(1.05)`
      }
    }
  </script>

<?php snippet('footer') ?>
