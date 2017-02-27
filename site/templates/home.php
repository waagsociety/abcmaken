<?php snippet('header') ?>

<?php
  $items = $page->children();
  $index = 0;
?>

  <main class="main" role="main">
    <section class="pages-list">
      <?php foreach($items as $item): $index++;   ?>
        <?php
          $image = thumb($item->image($item->cover()->toURL()), array('width' => 300))->url();
        ?>
       <a class="item-container" href="<?= $item->url() ?>">
        <article class="item" style="background-image: url(<?= $image ?>)">
          <div class="content">
            <h1 class="hover-title"><?= $item->title() ?></h1>
          </div>
        </article>
       </a>
      <?php endforeach ?>
    </section>
  </main>

<?php snippet('footer') ?>
