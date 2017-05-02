<?php snippet('header') ?>

<?php

  $index = 0;

?>
  <main class="main" role="main">
    <?php foreach($page->sections()->toStructure() as $section): $index ++ ?>
      <?php snippet('sections/' . $section->_fieldset(), array(
        'data' => $section,
        'index' => $index
      )) ?>
    <?php endforeach ?>
  </main>

<?php snippet('footer') ?>
