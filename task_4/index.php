<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h5>Webbplats med PHP</h5>
  <?php
  //hämtar aktuell klockslag..
  $currentTime = date("H");
  $currentDate = date("j");
  $evenOrOddDate = ($currentDate % 2 == 0) ? "jämnt" : "udda";

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
  echo  "<br> Idag är det " . $day  . " den" . date("j F") . ".";
  echo  "<br>Den " . date("j F") . " är ett " . $evenOrOddDate . " datum.";
  ?>
</body>
</html>
