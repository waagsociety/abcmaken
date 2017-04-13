<style>
  .section-<?php echo $index ?> {
    min-height: <?= $data->minheight() ?>;
  }
  .section-<?php echo $index ?> .bg {
    background-image: url(<?= $page->image($data->standardimage())->url() ?>);
    background-color: <?= $data->bgcolor() ?> !important;

    <?php if($page->contain() == '1'): ?>
      background: contain;
    <?php endif ?>
  }

  .section-<?php echo $index ?> .content-wrapper {
    background: <?= $data->bgcolor() ?> !important;

    <?php if($data->alignblock() == 'left'): ?>
    order: -1;
    <?php else: ?>
    order: 0;
    <?php endif ?>
  }

  .section-<?php echo $index ?> .content {
    color: <?= $data->textcolor() ?> !important;
    background: <?= $data->bgcolor() ?> !important;
  }
</style>

<section class="story-block section-<?php echo $index ?>" data-id="<?php echo strtolower(preg_replace("/[^A-Za-z0-9]/", '-', $data->anchor())); ?>" >
  <div class="bg"></div>
  <div class="content-wrapper">
    <div class="content">
      <h2><?= $data->title() ?></h2>
      <?php if($data->text()->isNotEmpty()): ?>
      <?php echo $data->text()->kt() ?>
      <?php endif ?>
    </div>
  </div>
</section>
