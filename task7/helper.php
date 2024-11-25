<?php

function sl_get_header()
{
    include 'parts/header.php';
}

function sl_get_footer()
{
    include 'parts/footer.php';
}

function sl_get_navbar()
{
    $navItems = [
        'index.php' => 'Start',
        'nyheter.php' => 'Nyheter',
        'about.php' => 'Om oss',
        'contact.php' => 'Kontakt',
    ];

    foreach ($navItems as $url => $navTitle) {
        echo "<a href='$url'>$navTitle</a>";
    }
}

?>
