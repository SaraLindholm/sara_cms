<?php include 'helper.php';
$number = isset($_POST['number']) ? $_POST['number'] : 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<?php sl_get_header(); ?>
<body class="bg-success p-2 bg-opacity-50">
  <div class="container text-center mt-5">
    <h3>Matematik</h3>
</div>
<div class="container text-start">
  <div class="row align-items-start">
    <form action="division.php" method="post">
      <div class="mb-3 col-md-2">
      <label for="number" class="form-label">Ange siffervärde</label>
        <input type="number" class="form-control" id="number" name="number" maxlength="1">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <div class="col">
    <?php sl_use_division($number); ?>
  </div>
</div>
<?php sl_get_footer(); ?>
