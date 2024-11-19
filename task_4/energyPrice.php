<?php include 'helper.php';

$price = isset($_POST['price']) ? $_POST['price'] : '';
$consumption = isset($_POST['consumption']) ? $_POST['consumption'] : '';
?>
<?php sl_get_header(); ?>
 <form action="energyPrice.php" method="post">
    <div class="mb-3 col-md-3 ">
      <label for="price" class="form-label">Aktuellt elpris (kr/KwH)</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="kr/KwH">
      <label for="consumption" class="form-label">Aktuell förbrukning (KwH)</label>
        <input type="number" class="form-control" name="consumption" id="consumption" placeholder="kwH">
    </div>
    <button type="submit" class="btn btn-primary mb-3 btn-lg">Beräkna</button>
  </form>
  <?php if ($price !== '' && $consumption !== '') {
      sl_elPrice_consumption($price, $consumption);
  } else {
      echo 'Ett eller fler fält lämnades tomma';
  } ?>
<?php sl_get_footer(); ?>
