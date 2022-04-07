<!DOCTYPE html>
<!--
    Auteur: <tygo, Don, Arda>
    Aanmaakdatum: <20/10/2021>

    template vragenlijst
-->
<html lang="nl">
<head>
    <title>

    </title>
    <meta charset="utf_8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/stylesheet.css" rel="stylesheet">
</head>
<body>
<?php
include "../includes/NAV.php"
?>
<h1>
    Welkom op de Vragenlijst om een opleiding te zoeken die bij je past
</h1>
<form action="uitslag.php">
    <h3>
        Vraag 1: Heb jij echt verstand van computers en netwerken? Vind je het ook leuk om dienstverlenend te zijn?
    </h3>
    <br>
    <input type="radio" name="antwoord1"> Ja
    <br>
    <input type="radio" name="antwoord2"> matig
    <br>
    <input type="radio" name="antwoord3"> nee
    <br>
    <input type="radio" name="antwoord4"> helemaal niet
    <br>
    <h3>
        Vraag 2: Heb je interresse van het coderen van software (bijv. games , apps of websites)
    </h3>
    <br>
    <input type="radio" name="antwoord1"> Ja
    <br>
    <input type="radio" name="antwoord2"> matig
    <br>
    <input type="radio" name="antwoord3"> nee
    <br>
    <input type="radio" name="antwoord4"> helemaal niet
    <br>
    <h3>
    Vraag 3: Voel je je thuis in virtual reality? Communiceer je goed in bits & bytes? Vind je het ook leuk om dienstverlenend te zijn?
    </h3>
    <br>
    <input type="radio" name="antwoord1"> Ja
    <br>
    <input type="radio" name="antwoord2"> matig
    <br>
    <input type="radio" name="antwoord3"> nee
    <br>
    <input type="radio" name="antwoord4"> helemaal niet
    <br>
    <h3>
    Vraag 4: Wil jij later verantwoordelijk zijn voor de informatiesystemen waar de moderne maatschappij op draait?
    </h3>
    <br>
    <input type="radio" name="antwoord1"> Ja
    <br>
    <input type="radio" name="antwoord2"> matig
    <br>
    <input type="radio" name="antwoord3"> nee
    <br>
    <input type="radio" name="antwoord4"> helemaal niet
    <br>
    <h3>
        Vraag 5: Vindt je het leuk om computers te bouwen
    </h3>
    <br>
    <input type="radio" name="antwoord1"> Ja, het lijkt me leuk
    <br>
    <input type="radio" name="antwoord2"> Ik heb al een gebouwt
    <br>
    <input type="radio" name="antwoord3"> nee
    <br>
    <input type="radio" name="antwoord4"> Ik heb er niet een gebouwt maar lijkt me wel leuk
    <br>
    <h3>
    Vraag 6: heb je interesse gehad om websites of software te programeren
    </h3>
    <br>
    <input type="radio" name="antwoord1"> Ja, het lijkt me leuk
    <br>
    <input type="radio" name="antwoord2"> Ik heb al een website gemaakt
    <br>
    <input type="radio" name="antwoord3"> nee
    <br>
    <input type="radio" name="antwoord4"> Ik heb geen website gemaakt maar het lijkt wel leuk
    <br>
</form>
</body>
</html>
