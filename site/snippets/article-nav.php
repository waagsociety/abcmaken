<?php if($page->hasPrev()): ?>
  <?php snippet('article-nav-item', ['item' => $page->prev(), 'direction' => 'prev']) ?>
<? else: ?>
  <?php snippet('article-nav-item', ['item' => $pages->find('home')->children()->last(), 'direction' => 'prev']) ?>
<?php endif ?>

<?php if($page->hasNextVisible()): ?>
  <?php snippet('article-nav-item', ['item' => $page->nextVisible(), 'direction' => 'next']) ?>
<? else: ?>
  <?php snippet('article-nav-item', ['item' => $pages->find('home')->children()->first(), 'direction' => 'next']) ?>
<?php endif ?>


<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function(event) {
    initArticleNav('.prev-article', '.next-article');
  });
</script>
