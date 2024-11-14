<?php include 'helper.php'
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>
<body>
<?php
sl_get_header()
?>
  <h5>Webbplats med PHP</h5>
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
    "God förmiddag, snart är det lunch!",
    "God eftermiddag!",
    "God kväll! Hoppas du haft en produktiv dag."
  ];

  echo "<h3> $greetings[$index]</h3>";
  ?>
</body>
<?php sl_get_footer() ?>
</html>
