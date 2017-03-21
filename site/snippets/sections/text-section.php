<style type="text/css">
  .section-<?php echo $index ?> {
    color: <?= $data->textcolor() ?> !important;
    background: <?= $data->bgcolor() ?> !important;
  }
</style>

<section class="text-section section-<?php echo $index ?>" data-id="<?php echo strtolower(preg_replace("/[^A-Za-z0-9]/", '-', $data->anchor())); ?>">
  <div class="content">
    <h2><?= $data->title() ?></h2>
    <?= $data->text()->kt() ?>
  </div>
</section>
