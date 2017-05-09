<?php if($page->hasPrev()): ?>
  <?php snippet('article-nav-item', ['item' => $page->prev(), 'direction' => 'prev']) ?>
<?php else: ?>
  <?php snippet('article-nav-item', ['item' => $pages->find('home')->children()->last(), 'direction' => 'prev']) ?>
<?php endif ?>

<?php if($page->hasNext()): ?>
  <?php snippet('article-nav-item', ['item' => $page->next(), 'direction' => 'next']) ?>
<?php else: ?>
  <?php snippet('article-nav-item', ['item' => $pages->find('home')->children()->first(), 'direction' => 'next']) ?>
<?php endif ?>


<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function(event) {
    initArticleNav('.prev-article', '.next-article');
  });
</script>
