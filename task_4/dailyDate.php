<?php include 'helper.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="bg-success p-2 bg-opacity-50">
<?php sl_get_header();
?>
<div class="container d-flex justify-content-center mt-5">
<div class="col-md-6">
  <h5>Dagens datum</h5>
  <?php
 sl_get_daily_date()
  ?>
  </div>
  </div>
</body>
<?php sl_get_footer() ?>
</html>
