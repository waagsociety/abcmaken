<?php snippet('header') ?>

<?php
  $items = $page->children();
  $index = 0;
?>

<?php
  $aboutitems = $pages->filterBy('tags', 'about', ',');
  $index = 0;
?>
  <div class="intro-bar">
    <div class="inner">
      <h1>Welkom op ABCMaken.nl</h1>
      <p>Kinderen willen maken in het onderwijs. En dat wil ABC van het Maken op een positieve manier stimuleren.</p>
      <a href="#" class="btn">Bekijk de film</a>
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

<?php snippet('footer') ?>
