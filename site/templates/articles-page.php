<?php snippet('header') ?>

  <main class="main" role="main">

    <?php foreach($page->sections()->toStructure() as $section): ?>
      <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
    <?php endforeach ?>
    

  </main>

<?php snippet('footer') ?>
