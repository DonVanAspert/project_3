<!DOCTYPE html>
<!--
    Auteur: <tygo, Don, Arda>
    Aanmaakdatum: <20/10/2021>

    template index/php
-->
<html lang="nl">
<head>
    <title>
        Homepage KW1C
    </title>
    <meta charset="utf_8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/stylesheet.css" rel="stylesheet">
</head>
<body>
    <?php
        include_once 'includes/nav.php';
    ?>
    <img id="home_img" src="Images/Homepage_img.jpg" rel="homepage_img">
    <h1 id="H1_homepage">
        ~ICT-ACADEMIE~
    </h1>
    <div class="homepage_block1">
        <h2>
            Algemeen
        </h2>
        <p>
            Een goede ICT’er is gedreven om te leren en is bereid om kennis te delen met anderen. Dat vinden ze bij het bedrijfsleven. Verder moet je wat willen bereiken, plezier hebben in wat je doet en goed in een team kunnen   werken. Tijdens je studie aan de ICT-Academie krijg je hiermee te maken. Dat gebeurt zoveel mogelijk in            projectvormen: leren werken en werkend leren in klein groepsverband, met opdrachten uit de praktijk.               Teamwork dus. Belangrijk is verder de adviesraad, die bestaat uit vertegenwoordigers van vooraanstaande            bedrijven uit de regio.
        </p>
    </div>
    <div class="homepage_block1">
        <h2>
            video-impressie
        </h2>
        <iframe width="80%" height="360" src="https://www.youtube.com/embed/P5E7u8-CRsQ?wmode=transparent"                      allowfullscreen="" style="margin-left: 10%;">
        </iframe>
    </div>
    <div class="homepage_block2">
        <h2>
                Informatie
        </h2>
        <p>
            Download de brochure van deze afdeling:
        </p>
        <a id="PDF_brochure" href="./pagina's/brochure_ICT.pdf" title="brochure" target="_blank">brochure in PDF</a>
    </div>
    <div class="homepage_block2">
        <h2>
            Contact
        </h2>
        <a href="tel:0736249600" title="Bel het Studenten Succes Centrum">073 624 9 600</a>
        <br>
        <a href="mailto:info@kw1c.nl" title="Stuur een e-mail naar het Studenten Succes Centrum">info@kw1c.nl</a>
    </div>
    <div class="homepage_block2" id="block_red">
        <h2>
            Heb je vragen? Wij geven jou advies:
        </h2>
        <a href="#" title="gesprek">-Gesprek met een studieadviseur</a>
        <br>
        <br>
        <a href="#" title="vraag stellen online">-Stel je vraag online</a>
    </div>
</body>
</html>