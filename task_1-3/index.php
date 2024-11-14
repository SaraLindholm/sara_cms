<?php include 'helper.php' ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP-test</title>
  </head>
  <body>
    <h2>Uppgift 1</h2>
    <?php
    $array = ['soppa', 'hamburgare', 'kladdkaka'];
    $arrayFavourite = implode(", " , $array);
    $name = "Sara";
    $lastName = "Lindholm";

    // sl_debug_($array);
    ?>
    <br><br>
    <?php

    echo "Hej! Jag heter " .$name . " " . $lastName. " och jag tycker det är kul att träffas! Mina favoriträtter är: " . $arrayFavourite . ".";
    ?>

     <hr><hr>

  </body>
</html>
