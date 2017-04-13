<?php snippet('header') ?>

<?php
  $items = $page->children();
  $index = 0;
?>

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

              <button>Bekijk letter <h1 class="hover-title"><?= $item->title() ?></h1></button>
            </div>
          </div>
        </article>
       </a>
      <?php endforeach ?>
    </section>
  </main>

<?php snippet('footer') ?>
