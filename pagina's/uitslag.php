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


<p>dit is je advies</p>
<p>hier kan je naar de pagina van jouw advies</p>


<br><br><br>

    <?php

    echo "hallo ".$_POST['naam'] ;

    ?>
    <br>

    <?php

    echo "De datum van vandaag is: " . date("Y/m/d") ;

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


?>

</body>
</html>

