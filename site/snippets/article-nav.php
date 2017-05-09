
  <?php snippet('article-nav-item', ['item' => $page->prev(), 'direction' => 'prev']) ?>



  <?php snippet('article-nav-item', ['item' => $page->next(), 'direction' => 'next']) ?>



<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function(event) {
    initArticleNav('.prev-article', '.next-article');
  });
</script>
