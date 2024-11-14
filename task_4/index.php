<?php include 'helper.php'
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
sl_get_header()
?>
  <div class="container d-flex justify-content-center mt-5">
    <div class="col-md-6">
      <h5>Webbplats med PHP, välkommna!</h5><br>




  <?php
  //hämtar aktuell klockslag..
  $currentTime = date("H");

  if ($currentTime <= 10) {
    $index = 0;
  } elseif ($currentTime <= 12) {
    $index = 1;
  } elseif ($currentTime <= 17) {
    $index = 2;
  } else {
   $index = 3;
  }

  $greetings = [
    "God morgon, hoppas du känner dig utvilad!",
    "God förmiddag, hoppas lunchen var god!",
    "God eftermiddag!",
    "God kväll! Hoppas du haft en produktiv dag."
  ];

  echo "<h4> $greetings[$index]</h4>";
  ?>
    </div>
  </div>
</body>
<?php sl_get_footer() ?>
</html>
