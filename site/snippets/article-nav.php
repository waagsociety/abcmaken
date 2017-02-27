<?php if($page->hasPrev()): ?>
<a href="<?php echo $page->prev()->url() ?>" class="article-nav prev-article"><?= $page->prev()->title() ?></a>
<? else: ?>
 <a href="<?php echo $pages->find('home')->children()->last()->url() ?>" class="article-nav prev-article"><?php echo $pages->find('home')->children()->last()->title() ?></a>
<?php endif ?>

<?php if($page->hasNextVisible()): ?>
<a href="<?= $page->nextVisible()->url() ?>" class="article-nav next-article"><?= $page->nextVisible()->title() ?></a>
<? else: ?>
<a href="<?php echo $pages->find('home')->children()->first()->url() ?>" class="article-nav next-article"><?php echo $pages->find('home')->children()->first()->title() ?></a>
<?php endif ?>


<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function(event) {
    initArticleNav('.prev-article', '.next-article');
  });
</script>
