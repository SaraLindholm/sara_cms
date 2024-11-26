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
        echo "<a class='navbar-brand' href='$url'>$navTitle</a>";
    }
}

function sl_get_news()
{
    $nyheter = [
        [
            'id' => 1,
            'bild' => '/src/car.png',
            'rubrik' => 'Man voltade med bil- 2 skadade till sjukhus',
            'text' =>
                'Det var under gårdagen som en man i hög hastighet voltade i viadukten på avfart 12 på E6an i riktning mot Malmö. Inga andra bilar var inblandade i ...',
            'datum' => '2024-11-12',
        ],
        [
            'id' => 2,
            'bild' => '/src/monk.png',
            'rubrik' => 'Kloster i Thailand granskas för oortodoxa metoder',
            'text' =>
                'Ett kloster i Thailand har hamnat i blåsväder efter anklagelser om att de använt döda kroppar i meditationsövningar. Myndigheterna har inlett en utredning',
            'datum' => '2024-11-15',
        ],
        [
            'id' => 3,
            'bild' => '/src/aiLearing.png',
            'rubrik' => '>AI i Utbildning',
            'text' =>
                'En ny AI-plattform anpassar lektioner till individuella behov och revolutionerar klassrum världen över. Lärare får nu detaljerad uppföljning av varje elevs framsteg.',
            'datum' => '2024-11-18',
        ],
        [
            'id' => 4,
            'bild' => '/src/greenEnergy.png',
            'rubrik' => 'Grön Energi-Breakthrough',
            'text' =>
                'En ny solpanelsteknik har ökat effektiviteten och gjort förnybar energi mer tillgänglig för utvecklingsländer..',
            'datum' => '2024-11-19',
        ],
        [
            'id' => 5,
            'bild' => '/src/space.png',
            'rubrik' => 'Mars Koloni Färdig inom 10 år',
            'text' =>
                'Forskare tror att människor kan bosätta sig på Mars inom ett decennium. Forskningen om hållbara bostäder och resurshantering går snabbt framåt',
            'datum' => '2024-11-20',
        ],
    ];

    foreach ($nyheter as $nyhet) {
        echo '<div class="card">
            <img class="card-img-top" src="' .
            $nyhet['bild'] .
            '" alt="Card image cap">
            <div class="card-body" style="height: 40%;">
                <h4 class="card-text">
                    <a href="nyhet.php?id=' .
            $nyhet['id'] .
            '" style="text-decoration: none; color: inherit;">' .
            $nyhet['rubrik'] .
            '</a>
                </h4>
                <p class="card-text">' .
            $nyhet['text'] .
            '</p>
            </div>
        </div>';
    }
}

function sl_get_oneNews()
{
    $nyheter = [
        [
            'id' => 1,
            'bild' => '/src/car.png',
            'rubrik' => 'Man voltade med bil- 2 skadade till sjukhus',
            'text' =>
                'Det var under gårdagen som en man i hög hastighet voltade i viadukten på avfart 12 på E6an i riktning mot Malmö. Inga andra bilar var inblandade i olyckan, men föraren, som misstänks ha förlorat kontrollen på grund av den hala vägbanan, förlorade snabbt kontrollen och voltade av vägen. Räddningstjänst och ambulans larmades till platsen där de snabbt påbörjade räddningsarbetet. Föraren, som var ensam i bilen, skadades allvarligt och fick föras till sjukhus för vård. Polis har inlett en utredning för att fastställa orsaken till olyckan',
            'datum' => '2024-11-12',
        ],
        [
            'id' => 2,
            'bild' => '/src/monk.png',
            'rubrik' => 'Kloster i Thailand granskas för oortodoxa metoder',
            'text' =>
                'Ett kloster i Thailand har hamnat i blåsväder efter anklagelser om att de använt döda kroppar i meditationsövningar, vilket chockerat både lokalbefolkning och internationella observatörer. Enligt vittnesmål har kropparna förvarats på klostrets område och använts som en del av en kontroversiell metod för att nå djupare meditationstillstånd. Myndigheterna har inlett en utredning för att avgöra om dessa metoder är lagliga och om de strider mot thailändska etikregler för religiös praxis. Händelsen har väckt frågor om gränserna för andliga övningar och resulterat i både lokala protester och internationell kritik.',
            'datum' => '2024-11-15',
        ],
        [
            'id' => 3,
            'bild' => '/src/aiLearing.png',
            'rubrik' => '>AI i Utbildning',
            'text' =>
                'n ny AI-plattform har utvecklats för att anpassa lektioner efter varje elevs individuella behov, vilket gör det möjligt för lärare att skapa skräddarsydda utbildningsplaner. Genom avancerad algoritmteknik kan plattformen analysera elevens inlärningstempo och styrkor, och ge omedelbar feedback. Detta gör det möjligt att fokusera på specifika områden där eleverna behöver mer stöd, och ger lärarna detaljerad uppföljning av deras framsteg. Plattformen har redan revolutionerat klassrummen världen över, och många ser den som en potentiell lösning på utmaningar inom utbildning, särskilt i områden med stora klassrum och begränsade resurser.',
            'datum' => '2024-11-18',
        ],
        [
            'id' => 4,
            'bild' => '/src/greenEnergy.png',
            'rubrik' => 'Grön Energi-Breakthrough',
            'text' =>
                'En ny solpanelsteknik har inte bara ökat effektiviteten i energiproduktionen, utan även sänkt kostnaderna för installation och drift. Detta gör solenergi till ett mer tillgängligt alternativ för utvecklingsländer som tidigare haft svårt att investera i förnybara energikällor. Den nya teknologin använder innovativa material och designlösningar som kräver mindre underhåll och fungerar bra även i områden med begränsad infrastruktur. Detta genombrott har potentialen att förändra energilandskapet i många delar av världen, och ge fler tillgång till hållbar energi',
            'datum' => '2024-11-19',
        ],
        [
            'id' => 5,
            'bild' => '/src/space.png',
            'rubrik' => 'Mars Koloni Färdig inom 10 år',
            'text' =>
                'Forskare är övertygade om att det inom ett decennium kommer vara möjligt för människor att bosätta sig på Mars, tack vare nya framsteg inom rymdteknologi och hållbara lösningar för livsmiljöer. Forskningsprojekt fokuserar på att skapa självförsörjande bostäder som kan stå emot Mars’ ogästvänliga miljö, inklusive extrema temperaturer och låg gravitation. Dessutom har framsteg gjorts inom resurshantering, där man utvecklar metoder för att återvinna vatten och odla mat på planeten, vilket gör det möjligt för långvarig människobevågning.',
            'datum' => '2024-11-20',
        ],
    ];

    $nyhet_id = isset($_GET['id']) ? $_GET['id'] : null;

    $nyhet = null;
    foreach ($nyheter as $artikel) {
        if ($artikel['id'] === (int) $nyhet_id) {
            $nyhet = $artikel;
            break;
        }
    }

    if (!$nyhet === null) {
        echo 'Det finns ingen nyhet med detta id.';
        exit();
    }
    echo '
    <div class="container" style="margin-top:5rem;">
        <div class="card" style="width: 100%;">
            <img class="card-img-top" src="' .
        $nyhet['bild'] .
        '" alt="Card image cap" style="margin-top:0;">
            <div class="card-body">
                <h1 class="card-title">' .
        $nyhet['rubrik'] .
        '</h1>
                <p><strong>Publicerad:</strong> ' .
        $nyhet['datum'] .
        '</p>
                <p class="card-text">' .
        $nyhet['text'] .
        '</p>
            </div>
        </div>
    </div>';
}

?>
