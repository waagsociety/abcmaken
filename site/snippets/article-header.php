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

  <a href="#avontuur" class="mouse-down">
    <div class="bullet">
    </div>
  </a>
</header>


<script type="text/javascript">
    /* hier geen ES6! want dit gaat niet door Babel heen */
  // window.resize = window.onmousemove = function(e) {
  //     var mousecoords = getMousePos(e)
  //     if (mousecoords.x > 0) {
  //     var vh = document.querySelector('.article-header').offsetWidth;
  //       document.querySelector('.intro-letter').style.transform = `translate(${(mousecoords.x * vh) / (50 * 800)}px, ${(mousecoords.y * vh) / (50 * 800)}px)`
  //     }
  //   }
  </script>
