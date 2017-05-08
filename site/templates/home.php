<?php snippet('header') ?>



<?php
  $items = $page->children();
  $index = 0;
  $aboutitems = $pages->filterBy('tags', 'about', ',');
  $index = 0;           
  $first_visit = false;
  
  if(cookie::get('first_time_visit', true) == true)
  {
	cookie::set('first_time_visit', false);
	$first_visit = true;
  }

?>      

  <?php if($first_visit): ?>
  <div class="intro-bar">
    <div class="inner">
      <h1>Welkom op ABCMaken.nl</h1>
      <p>Kinderen willen maken in het onderwijs. En dat wil ABC van het Maken op een positieve manier stimuleren.</p>
      <button class="btn" onclick="toggleModal()">Bekijk de film</button>
    </div>
  </div>
  <?php endif ?>

  <div class="modal">
    <div class="container">
      <span class="close" onclick="toggleModal()">❌</span>
      <iframe width="700" height="394" src="https://www.youtube.com/embed/_MDOB5-ocQc?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
  <main class="main" role="main">
    <section class="pages-list">
      <?php foreach($items as $item): $index++;   ?>
        <?php
          $image = thumb($item->image($item->cover()->toURL()), array('width' => 600))->url();
        ?>
       <a class="item-container" href="<?= $item->url() ?>">
        <div class="bg" style="background-image: url(<?= $image ?>)"></div>
        <article class="item">
          <div class="content">
            <div>
              <button><h1 class="hover-title"><?= $item->title() ?></h1></button>
            </div>
          </div>
        </article>
       </a>
      <?php endforeach ?>

      <?php foreach($aboutitems as $aboutitem): ?>
        <?php
          $aboutimage = thumb($aboutitem->image($aboutitem->cover()->toURL()), array('width' => 600))->url();
        ?>
      <a class="item-container" href="<?= $aboutitem->url() ?>">
        <div class="bg" style="background-image: url(<?= $aboutimage ?>)"></div>
        <article class="item">
          <div class="content">
            <div>
              <button><h1 class="hover-title"><?= $aboutitem->title() ?></h1></button>
            </div>
          </div>
        </article>
      </a>
      <?php endforeach ?>
    </section>
  </main>

  <script>
    function toggleModal(e){
      document.body.classList.toggle('modal-open');
    }
  </script>

<?php snippet('footer') ?>
