<style>
  .section-<?php echo $index ?> .bg {
    background-image: url(<?= $page->image($data->standardimage())->url() ?>);
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

<section class="story-block section-<?php echo $index ?>">
  <div class="bg"></div>
  <div class="content-wrapper">
    <div class="content">
      <?php if($data->text()->isNotEmpty()): ?>
       <?php echo kirbytext($data->text()) ?>
      <?php endif ?>
    </div>
  </div>
</section>
