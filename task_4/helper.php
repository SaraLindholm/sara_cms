<?php
function sl_debug_($variabelSomSkaDumpas)
{
    echo '<pre>';
    var_dump($variabelSomSkaDumpas);
    die('sl_debug was here');
}

function sl_get_header()
{
    include 'parts/header.php';
}

function sl_get_navbar()
{
    $navItems = [
        'index.php' => 'Start',
        'dailyDate.php' => 'Dagens Datum',
        'multiplication.php' => 'Matematik',
        'energyPrice.php' => 'Elpris-mätare',
    ];
    foreach ($navItems as $url => $navTitle) {
        echo "<a class='navbar-brand' href='$url'>$navTitle</a>";
    }
}

function sl_get_footer()
{
    include 'parts/footer.php';
}

function sl_greeting($name = 'JaneDoe')
{
    //hämtar aktuell klockslag..
    $currentTime = date('H');
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
        'God morgon, hoppas du känner dig utvilad ',
        'God förmiddag, hoppas lunchen var god ',
        'God eftermiddag ',
        'God kväll! Hoppas du haft en produktiv dag ',
    ];

    echo "<h3> $greetings[$index] $name!</h3>";
}
function sl_timeStamp_from_date($dateInput = null)
{
    if (!empty($dateInput)) {
        // Konvertera det inmatade datumet till en tidsstämpel
        return strtotime($dateInput);
    }
    // Om inget datum skickas, returnera tidsstämpeln för dagens datum
    return time();
}

function sl_get_daily_date()
{
    $currentDate = date('j');
    $evenOrOddDate = $currentDate % 2 == 0 ? 'jämnt' : 'udda';

    // Hämtar aktuell veckodagindex 0-6
    $currentDay = date('w');
    // skapar en array som kan användas för att omvandla veckodagsindex till aktuell dag
    $weekdaysArray = [
        'Söndag',
        'Måndag',
        'Tisdag',
        'Onsdag',
        'Torsdag',
        'Fredag',
        'Lördag',
    ];
    //skapar en variabel som består av arrayen och väljer aktuell dah beroende på index
    $day = $weekdaysArray[$currentDay];

    // echo "<h3> $greetings[$index]</h3>";
    echo '<p> Idag är det ' . $day . ' den' . date('j F') . '</p>';
    echo '<p>Den ' . date('j F') . ' är ett ' . $evenOrOddDate . ' datum.</p>';
}

function sl_elPrice_consumption($price, $consumption)
{
    $sum = $price * $consumption;
    echo "Det beräknade elpriset blir $sum kronor";
}

function sl_use_multiplication($number)
{
    $number = (int) $number;
    echo "Multiplikations-tabellen med siffran $number <ul>";
    for ($x = 1; $x <= 10; $x++) {
        $sum = $x * $number;
        echo "<li> $number * $x = $sum </li><br>";
    }
    echo '</ul>';
}
function sl_use_division($number)
{
    $number = (int) $number;
    echo "Division med siffran $number <ul>";
    for ($x = 1; $x <= 10; $x++) {
        $sum = $x % $number;
        echo "<li> $number / $x = $sum </li><br>";
    }
    echo '</ul>';
}
function sl_use_addition($number)
{
    $number = (int) $number;
    echo "Addition med siffran $number <ul>";
    for ($x = 1; $x <= 10; $x++) {
        $sum = $x + $number;
        echo "<li> $number + $x  = $sum </li><br>";
    }
    echo '</ul>';
}

function sl_use_subtration($number)
{
    $number = (int) $number;
    echo "Subtraktion med siffran $number <ul>";
    for ($x = 1; $x <= 10; $x++) {
        $sum = $x - $number;
        echo "<li> $number - $x = $sum </li><br>";
    }
    echo '</ul>';
}

error_reporting(E_ALL);
ini_set('display_errors', 1);
