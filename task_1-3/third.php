<?php include 'helper.php' ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP-test</title>
  </head>
  <body>
    <h2>Uppgift 3</h2>
    <?php

$age = 19;

if($age >= 18){
  echo "Du är vuxen";
} elseif ($age >=13) {
  echo "Du är en tonåring!";
} else {
  echo "Du är ett litet barn!";
};

  $order = array (
    "bord" => "12",
    "frukt" => ["banan","päron" , "blåbär"],
    "extra" => "fruktsallad"
  );


  $fruktarray = implode(", ", $order["frukt"]);

    ?>
    <br><br>
    <?php

    echo "Du ska servera en " .
    $fruktarray."-smoothie till bord " .
    $order["bord"] . ". Med en " .
    $order["extra"] . " vid sidan om. Tack.";


    $order2 = array (
      "bord2" => "10",
      "frukt2" => ["vindruvor", "jordgubbar", "hallon"],
      "extra2" => "vispad grädde"
    );

    $fruktarray2 = "";
      foreach ($order2 ["frukt"] as $frukt) {
        $fruktarray2 .=$frukt2 . ", ";
      };

      echo "<br><br>Du ska servera en " .
      $fruktarray."-smoothie till bord " .
      $order2["bord2"] . ". Med en " .
      $order2["extra2"] . " vid sidan om. Tack.";

    ?>

     <hr><hr>

  </body>
</html>
