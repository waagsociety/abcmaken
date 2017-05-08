<style>
  .section-<?php echo $index ?> {
    min-height: <?= $data->minheight() ?>;
  }
  .section-<?php echo $index ?> .bg {
    background-image: url(<?= $page->image($data->standardimage())->url() ?>);
    background-color: <?= $data->bgcolor() ?> !important;

    <?php if($data->contain() == '1'): ?>
      background: contain;
    <?php endif ?>
  }

  .section-<?php echo $index ?> .content-wrapper {
    background: <?= $data->bgcolor() ?> !important;

    <?php if($data->alignblock() == 'left'): ?>
      order: -1;
      padding: 5em 2em 5em 10em;
    <?php else: ?>
      padding: 5em 10em 5em 2em;
      order: 0;
    <?php endif ?>

    <?php if($data->regularpadding() == '1'): ?>
      padding: 5em;
    <?php endif ?>
  }

  .section-<?php echo $index ?> .content {
    color: <?= $data->textcolor() ?> !important;
    background: <?= $data->bgcolor() ?> !important;
  }


  @media (max-width: 68em) {
    .section-<?php echo $index ?> {
      min-height: 0 !important;
    }

    .section-<?php echo $index ?> .content-wrapper {
      background: <?= $data->bgcolor() ?> !important;

      <?php if($data->alignblock() == 'left'): ?>
        padding: 5em 2em 5em 6em;
      <?php else: ?>
        padding: 5em 6em 5em 2em;
      <?php endif ?>

      <?php if($data->regularpadding() == '1'): ?>
        padding: 3em;
      <?php endif ?>
    }
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

    <div class="pyro">
      <div class="before"></div>
      <div class="after"></div>
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", function(event) {
        var easter_egg = new Konami(function() {
          document.body.classList.add('konami');
        });
      });
    </script>
  </div>
</section>
