<?php include 'helper.php';

$name = $_POST['name'];
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="bg-success bg-opacity-50">
<?php
sl_get_header();
sl_get_navbar();
?>
  <div class="container d-flex justify-content-center mt-5">
    <div class="mx-auto">
    <?php sl_greeting($name); ?>
      <!-- <h4>Dagens trevliga hälsning</h4><br> -->
      <form action="index.php" method="post">
        <div class="mb-5 mt-5 col-6">
        <label for="name" class="form-label">Ange:</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Ditt namn">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
      </form>
    </div>
  </div>
<?php sl_get_footer(); ?>
