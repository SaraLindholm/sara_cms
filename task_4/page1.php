<?php include 'helper.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php sl_get_header();
?>
<div class="container d-flex justify-content-center mt-5">
<div class="col-md-6">
  <h5>Dagens datum</h5>
  <?php
  $currentDate = date("j");
  $evenOrOddDate = ($currentDate % 2 == 0) ? "jämnt" : "udda";

  // Hämtar aktuell veckodagindex 0-6
  $currentDay = date("w");

  // skapar en array som kan användas för att omvandla veckodagsindex till aktuell dag
  $weekdaysArray = [
    "Söndag",
    "Måndag",
    "Tisdag",
    "Onsdag",
    "Torsdag",
    "Fredag",
    "Lördag" ];
  //skapar en variabel som består av arrayen och väljer aktuell dah beroende på index
  $day = $weekdaysArray[$currentDay];

  // echo "<h3> $greetings[$index]</h3>";
  echo  "<p> Idag är det " . $day  . " den" . date("j F") . "</p>";
  echo  "<p>Den " . date("j F") . " är ett " . $evenOrOddDate . " datum.</p>";
  ?>
  </div>
  </div>
</body>
<?php sl_get_footer() ?>
</html>
