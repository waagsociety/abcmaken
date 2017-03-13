<nav class="navigation">
  <div class="wrap">
    <div>
      <span class="navtext">ABC</span>
    </div>
    <div class="hamburger">
      <span class="stripe"></span>
      <span class="stripe"></span>
      <span class="stripe"></span>
    </div>
  </div>
</nav>

<nav class="menu-panel">
  <ul class="menu-list">
    <?php foreach($pages->find('home')->children() as $item): ?>
    <li class="item">
      <div>
        <a class="letter" href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a>
        <ul>
          <li>Applicatie</li>
          <li>Applicatie</li>
          <li>Applicatie</li>
          <li>Applicatie</li>
        </ul>
      </div>
    </li>
    <?php endforeach ?>
  </ul>
</nav>

<script type="text/javascript">
  document.querySelector('.navigation').addEventListener('click', function() {
    this.classList.toggle('active');
    document.body.classList.toggle('menu-open')
  })
</script>
