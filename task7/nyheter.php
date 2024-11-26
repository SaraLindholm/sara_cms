<style> <?php include 'style.css'; ?> </style>
<?php
include 'helper.php';
sl_get_header();
?>
<div class="news-container-fluid d-flex flex-wrap" style="padding: 0;">
  <div class="left d-flex flex-wrap">
    <?php sl_get_news(); ?>

    </div>

  <div class="right">
    <div class="card" style="width: 18rem;">
    <img src="/src/monk.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="/src/monk.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="/src/monk.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="/src/monk.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>

  </div>

</div>
<?php sl_get_footer(); ?>
