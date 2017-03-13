<style type="text/css">
  .section-<?php echo $index ?> {
    color: <?= $data->textcolor() ?> !important;
    background-color: <?= $data->bgcolor() ?> !important;
  }
</style>

<section id="<?= $data->indextitle() ?>" class="quote-section section-<?php echo $index ?> container">
  <div>
    <blockquote>
      <?= $data->text() ?>
    </blockquote>
    <div class="citation">
      <?= $data->citation() ?>
    </div>
  </div>
</section>
