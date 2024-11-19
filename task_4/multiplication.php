<?php include 'helper.php';
$number = isset($_POST['number']) ? $_POST['number'] : 13;
?>

<?php sl_get_header(); ?>
<body class="bg-success p-2 bg-opacity-50">
  <div class="container text-center mt-5">
    <h3>Matematik</h3>
  </div>
  <div class="container text-start">
    <div class="row align-items-start">
      <form action="multiplication.php" method="post">
        <div class="mb-3 col-md-2">
          <label for="number" class="form-label">Ange tabell</label>
            <input type="number" class="form-control" id="number" name="number" maxlength="1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
      </form>
      <div class="col border-start">
        <?php sl_use_multiplication($number); ?>
      </div>
  </div>

<?php sl_get_footer(); ?>
