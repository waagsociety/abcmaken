<?php snippet('header') ?>

<?php
  $items = $page->children();
  $index = 0;
?>

  <main class="main" role="main">
    <section class="pages-list">
      <?php foreach($items as $item): $index++; ?>
       <a class="item-container" href="<?= $item->url() ?>">
        <article class="item" style="background-image: url(<?= $item->contentURL() . '/' . $item->cover() ?>);">
        </article>
       </a>
      <?php endforeach ?>
    </section>
  </main>

<?php snippet('footer') ?>
