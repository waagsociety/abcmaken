<style type="text/css">
  .section-<?php echo $index ?> {
    color: <?= $data->textcolor() ?> !important;
    background-color: <?= $data->bgcolor() ?> !important;
  }
</style>

<section data-id="<?php echo strtolower(preg_replace("/[^A-Za-z0-9]/", '-', $data->anchor())); ?>" class="quote-section section-<?php echo $index ?> container">
  <div>
    <blockquote>
      <?= $data->title() ?>
    </blockquote>             
	<div class="description">
	  <?= $data->text()->kirbytext() ?>
	</div>
    <div class="citation">
      <?= $data->citation() ?>
    </div>
  </div>
</section>
                    

