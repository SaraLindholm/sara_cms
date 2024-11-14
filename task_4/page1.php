<?php include 'helper.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>
<body>
<?php sl_get_header();
?>
  <h3>Sida1</h3>
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

  echo "<h3> $greetings[$index]</h3>";
  echo  "<p> Idag är det " . $day  . " den" . date("j F") . "</p>";
  echo  "<p>Den " . date("j F") . " är ett " . $evenOrOddDate . " datum.</p>";
  ?>
</body>
<?php sl_get_footer() ?>
</html>
