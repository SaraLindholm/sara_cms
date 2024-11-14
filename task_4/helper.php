<?php

function sl_debug_($variabelSomSkaDumpas)
{
  echo "<pre>";
  var_dump($variabelSomSkaDumpas);
  die("sl_debug was here");
}

function sl_get_header() {
  include('parts/header.php');
}

function sl_get_navbar() {
  $navItems = [
    "Start", "Dagens Datum", "Matematik"
  ];
  foreach($navItems as $navTitles) {
    "<br>
    <a href='$navItems'>$navTitles</a> ";
  }
};


function sl_get_footer() {
  include('parts/footer.php');
};

function sl_use_multiplication($number) {
  echo "Multiplikations-tabellen med siffran " . $number . "<ul>";
  for($x = 1; $x <= 10; $x ++) {
  $muliNumber = $x * $number;
  echo "<li>" . $number . " * " . $x . " = " . $muliNumber . "</li><br>";
  }
  echo "</ul>";

};
function sl_use_division($number) {
  echo "Division med siffran $number <ul>";
  for($x = 1; $x <= 10; $x ++) {
  $sum = $x % $number;
  echo "<li> $number / $x = $sum </li><br>";
  }
  echo "</ul>";

};
function sl_use_addition($number) {
  echo "Additions med siffran $number <ul>";
  for($x = 1; $x <= 10; $x ++) {
  $sum = $x + $number;
  echo "<li> $number + $x  = $sum </li><br>";
  }
  echo "</ul>";

};

function sl_use_subtration($number) {
  echo "Subtraktion med siffran $number <ul>";
  for ($x =1; $x <= 10; $x ++) {
    $sum = $x - $number;
    echo "<li> $number - $x = $sum </li><br>";
  }
  echo "</ul>";
}
