<section data-id="<?php echo strtolower(preg_replace("/[^A-Za-z0-9]/", '-', $data->text())); ?>" class="quote-section section-<?php echo $index ?> container">
  <div>
    <blockquote>
      <?= $data->text() ?>
    </blockquote>
    <div class="citation">
      <?= $data->citation() ?>
    </div>
  </div>
</section>
                    

