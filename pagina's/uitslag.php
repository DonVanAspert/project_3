<!DOCTYPE html>
<!--
    Auteur: <tygo, Don, Arda>
    Aanmaakdatum: <20/10/2021>

    template de uitslag van de vragenlijst
-->
<html lang="nl">
<head>
    <title>
        uitslag vragen
    </title>
    <meta charset="utf_8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/stylesheet.css" rel="stylesheet">
</head>
<?php
// hier wordt de geinclude nav neergezet
?>
<body class="body_uitslag">
    <?php
        include_once '../includes/NAV.php';
    ?>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>




<?php
// hieronder staat de datum van vandaag
?>

<div class="date">
    <?php

    echo "De datum van vandaag is: " . date("Y/m/d") ;

    ?>

    <?php
    // hier wordt de ingevulde naam laten zien
    ?>
</div>
    <div class="name">
    <?php

    echo "Hallo ".$_POST['naam'] ;

    ?>
    <br>
    </div>

    <p>
        Hieronder staan de antwoorder die jij gesselecteerd hebt.
    </p>
    <?php
    // hieronder staan alle ingevulde vragen
    ?>
<p>
    Vraag 1: Heb jij echt verstand van computers en netwerken? Vind je het ook leuk om dienstverlenend te zijn?
    <br>
    <?php

    echo "Jouw gekozen antwoord is: ".$_POST['vraag1'] ;

    ?>
</p>
    <p class="dark">
        Vraag 2: Heb je interresse van het coderen van software (bijv. games , apps of websites)
        <br>
        <?php

        echo "Jouw gekozen antwoord is: ".$_POST['vraag2'] ;

        ?>
    </p>
    <p>
        Vraag 3: Voel je je thuis in virtual reality? Communiceer je goed in bits & bytes? Vind je het ook leuk om dienstverlenend te zijn?
        <br>
        <?php

        echo "Jouw gekozen antwoord is: ".$_POST['vraag3'] ;

        ?>
    </p>
    <p class="dark">
        Vraag 4: Wil jij later verantwoordelijk zijn voor de informatiesystemen waar de moderne maatschappij op draait?
        <br>
        <?php

        echo "Jouw gekozen antwoord is: ".$_POST['vraag4'] ;

        ?>
    </p>
    <p>
        Vraag 5: Vindt je het leuk om computers te bouwen
        <br>
        <?php

        echo "Jouw gekozen antwoord is: ".$_POST['vraag5'] ;

        ?>
    </p>
    <p class="dark">
        Vraag 6: heb je interesse gehad om websites of software te programeren
        <br>
        <?php

        echo "Jouw gekozen antwoord is: ".$_POST['vraag6'] ;

        ?>
    </p>
    <p>
        vraag 7: vind je het leuk om met virtuele machines te werken?
        <br>
        <?php

        echo "Jouw gekozen antwoord is: ".$_POST['vraag7'] ;

        ?>
    </p>
    <p class="dark">
        vraag 8: heb je ooit willen weten hoe ze video games maken?
        <br>
        <?php

        echo "Jouw gekozen antwoord is: ".$_POST['vraag8'] ;

        ?>
    </p>
    <p>
        vraag 9: heb je interresse om computers/servers op te zetten?
        <br>
        <?php

        echo "Jouw gekozen antwoord is: ".$_POST['vraag9'] ;

        ?>
    </p>
    <p class="dark">
        vraag 10: kan je lang achter een computerscherm zitten?
        <br>
        <?php

        echo "Jouw gekozen antwoord is: ".$_POST['vraag10'] ;

        ?>
    </p>
    <p>
        vraag 11: vindt je het leuk om met netwerken te werken?
        <br>
        <?php

        echo "Jouw gekozen antwoord is: ".$_POST['vraag11'] ;

        ?>
    </p>
    <p class="dark">
        vraag 12: wil je later mensen helpen met hardware problemen van mensen/klanten?
        <br>
        <?php

        echo "Jouw gekozen antwoord is: ".$_POST['vraag12'] ;

        ?>
    </p>
    <p>
        vraag 13: vindt je het leuk om de verdediging van een website te testen?
        <br>
        <?php

        echo "Jouw gekozen antwoord is: ".$_POST['vraag13'] ;

        ?>
    </p>
    <p class="dark">
        vraag 14: vindt je leuk om te sleutelen met computers?
        <br>
        <?php

        echo "Jouw gekozen antwoord is: ".$_POST['vraag14'] ;

        ?>
    </p>
    <p>
        vraag 15: vindt je het leuk om mensen te verdedigen tegen cyber-aanvallen?
        <br>
        <?php

        echo "Jouw gekozen antwoord is: ".$_POST['vraag15'] ;

        ?>
    </p>

<?php
    $vraag1 = $_POST['vraag1'];
    $vraag2 = $_POST['vraag2'];
    $vraag3 = $_POST['vraag3'];
    $vraag4 = $_POST['vraag4'];
    $vraag5 = $_POST['vraag5'];
    $vraag6 = $_POST['vraag6'];
    $vraag7 = $_POST['vraag7'];
    $vraag8 = $_POST['vraag8'];
    $vraag9 = $_POST['vraag9'];
    $vraag10 = $_POST['vraag10'];
    $vraag11 = $_POST['vraag11'];
    $vraag12 = $_POST['vraag12'];
    $vraag13 = $_POST['vraag13'];
    ?>


    <?php
    {
// maakt een variabelen waarbij alle vragen bij elkaar opgeteld worden
        //$uitslag= $vraag1 + $vraag2 + $vraag3 + $vraag4 + $vraag5 + $vraag6 + $vraag7 + $vraag8 + $vraag9 + $vraag10 +$vraag11+$vraag12;
        $uitslag = 13;
    }
    // if statement waarbij er gekeken word of de uitslag lager of gelijk aan 6 is dit het geval dan toont hij de tekst "dit past niet bij jou"
    if ($uitslag <=6)
    {
        echo "<h2 class='greet'></h2><h2 class='opleiding'> dit past niet bij jou </h2>";
    }
    elseif
    ($uitslag <=12)
    {
        // elseif statement waarbij er gekeken word of de uitslag lager of gelijk aan 112 is dit het geval dan toont hij de tekst
        // " de opleiding die bij jou past is Allround medewerker IT systems and Devices(BOL)"
        echo "<h2 class='greet'></h2><h2 class='opleiding'> de opleiding die bij jou past is Allround medewerker IT systems and Devices(BOL)</h2>";
        echo "<h2> <a class='Info' href='https://www.kw1c.nl/opleiding/25605o10/allround-medewerker-it-systems-and-devices-bol%27%3E Informatie link </h2> ";
        echo "<p> <img class='Opleidingimg' src='../images/allround.jpg' </p>";

    }
    elseif
    ($uitslag <=24)
    {
        // elseif statement waarbij er gekeken word of de uitslag lager of gelijk aan 24 is dit het geval dan toont hij de tekst
        // " de opleiding sie bij jouw past is is Software Developer (BOL)"
        echo "<h2 class='greet'></h2><h2 class='opleiding'> de opleiding die bij jouw past is is Software Developer (BOL)</h2> ";
        echo "<h2> <a class='Info' href='https://www.kw1c.nl/opleiding/25604o10/software-developer-bol%27%3E Informatie link </h2> ";
        echo "<p> <img class='Opleidingimg' src='../images/ict.jpg' </p>";
    }
    //$show naam
    //$naam = $_POST
    ?>
</body>
</html>

