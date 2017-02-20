<section class="imageBanner" 
<?php if ($data->picture()->isNotEmpty()): ?>
  style="background-image: url(<?= $page->image($data->picture())->url() ?>)"
<?php endif ?>
>
  <h2 class="imageBanner-headline">
    <?= $data->text() ?>
  </h2>
</section>
