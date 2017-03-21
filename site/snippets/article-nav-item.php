<a href="<?php echo $item->url() ?>" class="article-nav <?= $direction ?>-article">
<span><?= $item->title() ?></span>
<?php if($item->video()): ?>
<div class="video-hover">
  <video class="inner" autoplay loop muted style="background-image: url(<?= $item->contentURL() . '/' . $item->cover() ?>);"> 
    <source src="<?= $item->video()->url() ?>" type=video/webm> 
  </video>
</div>
<?php endif ?>
</a>
