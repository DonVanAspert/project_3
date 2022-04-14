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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1>
    Welkom op de Vragenlijst om een opleiding te zoeken die bij je past
</h1>
<form action="uitslag.php" method="post">
    <?php
    // <input type="radio" id="html" name="fav_language" value="HTML">
    //  <label for="html">HTML</label><br>
    //  <input type="radio" id="css" name="fav_language" value="CSS">
    //  <label for="css">CSS</label><br>
    //  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
    //  <label for="javascript">JavaScript</label>
    ?>
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
    <input type="radio" name="antwoord5"> Ja
    <br>
    <input type="radio" name="antwoord6"> matig
    <br>
    <input type="radio" name="antwoord7"> nee
    <br>
    <input type="radio" name="antwoord8"> helemaal niet
    <br>
    <h3>
    Vraag 3: Voel je je thuis in virtual reality? Communiceer je goed in bits & bytes? Vind je het ook leuk om dienstverlenend te zijn?
    </h3>
    <br>
    <input type="radio" name="antwoord9"> Ja
    <br>
    <input type="radio" name="antwoord10"> matig
    <br>
    <input type="radio" name="antwoord11"> nee
    <br>
    <input type="radio" name="antwoord12"> helemaal niet
    <br>
    <h3>
    Vraag 4: Wil jij later verantwoordelijk zijn voor de informatiesystemen waar de moderne maatschappij op draait?
    </h3>
    <br>
    <input type="radio" name="antwoord13"> Ja
    <br>
    <input type="radio" name="antwoord14"> matig
    <br>
    <input type="radio" name="antwoord15"> nee
    <br>
    <input type="radio" name="antwoord16"> helemaal niet
    <br>
    <h3>
        Vraag 5: Vindt je het leuk om computers te bouwen
    </h3>
    <br>
    <input type="radio" name="antwoord17"> Ja, het lijkt me leuk
    <br>
    <input type="radio" name="antwoord18"> Ik heb al een gebouwt
    <br>
    <input type="radio" name="antwoord19"> nee
    <br>
    <input type="radio" name="antwoord20"> Ik heb er niet een gebouwt maar lijkt me wel leuk
    <br>
    <h3>
    Vraag 6: heb je interesse gehad om websites of software te programeren
    </h3>
    <br>
    <input type="radio" name="antwoord21"> Ja, het lijkt me leuk
    <br>
    <input type="radio" name="antwoord22"> Ik heb al een website gemaakt
    <br>
    <input type="radio" name="antwoord23"> nee
    <br>
    <input type="radio" name="antwoord24"> Ik heb geen website gemaakt maar het lijkt wel leuk
    <br>
    <h3>
        vraag 7: vind je het leuk om met virtuele machines te werken
    </h3>
    <input type="radio" name="antwoord25"> Ja, het lijkt me leuk
    <br>
    <input type="radio" name="antwoord26"> Ik heb al eens met een virtuele machine gewerkt
    <br>
    <input type="radio" name="antwoord27"> nee
    <br>
    <input type="radio" name="antwoord28"> Ik heb geen verstand van virtuele machines maar het lijkt wel iets voor mij
    <h3>
        vraag 8: heb je ooit willen weten hoe ze video games maken?
    </h3>
    <input type="radio" name="antwoord29"> Ja
    <br>
    <input type="radio" name="antwoord30"> Ik heb van anderen gehoord/gezien hoe het gedaan wordt en heb zin
    <br>
    <input type="radio" name="antwoord31"> nee, ik heb geen zin
    <h3>
        vraag 9: heb je interresse om computers/servers op te zetten
    </h3>
      <input type="radio" id="Ja" name="vraag9" value="ja">
      <label for="ja"></label>Ik heb van anderen gehoord/gezien hoe het gedaan wordt en heb zin<br>
      <input type="radio" id="Nee" name="vraag9" value="nee">
      <label for="nee"></label>nee, ik heb geen zin in het opzetten<br>
      <input type="radio" id="Matig" name="vraag9" value="matig">
      <label for="matig"> ik heb een klein verstand van het bouwen van computers.</label>

    <h3>
        vraag 10: kan je lang achter een computerscherm zitten?
    </h3>
      <input type="radio" id="Ja" name="vraag10" value="ja">
      <label for="ja">Ja, dat kan ik</label><br>
      <input type="radio" id="Nee" name="vraag10" value="nee">
      <label for="nee">nee, ik ben actief</label><br>
      <input type="radio" id="Matig" name="vraag10" value="matig">
      <label for="matig">ik kan soms lang en soms niet lang zitten.</label>
    <h3>
        vraag 11: kan je lang achter een computerscherm zitten?
    </h3>
      <input type="radio" id="Ja" name="vraag11" value="ja">
      <label for="ja">Ja, dat kan ik</label><br>
      <input type="radio" id="Nee" name="vraag11" value="nee">
      <label for="nee">nee, ik ben actief</label><br>
      <input type="radio" id="Matig" name="vraag11" value="matig">
      <label for="matig">ik kan soms lang en soms niet lang zitten.</label>
    <h3>
        vraag 12: kan je lang achter een computerscherm zitten?
    </h3>
      <input type="radio" id="Ja" name="vraag10" value="ja">
      <label for="ja">Ja, dat kan ik</label><br>
      <input type="radio" id="Nee" name="vraag10" value="nee">
      <label for="nee">nee, ik ben actief</label><br>
      <input type="radio" id="Matig" name="vraag10" value="matig">
      <label for="matig">ik kan soms lang en soms niet lang zitten.</label>
    <h3>
        vraag 13: kan je lang achter een computerscherm zitten?
    </h3>
      <input type="radio" id="Ja" name="vraag10" value="ja">
      <label for="ja">Ja, dat kan ik</label><br>
      <input type="radio" id="Nee" name="vraag10" value="nee">
      <label for="nee">nee, ik ben actief</label><br>
      <input type="radio" id="Matig" name="vraag10" value="matig">
      <label for="matig">ik kan soms lang en soms niet lang zitten.</label>
    <h3>
        vraag 14: kan je lang achter een computerscherm zitten?
    </h3>
      <input type="radio" id="Ja" name="vraag10" value="ja">
      <label for="ja">Ja, dat kan ik</label><br>
      <input type="radio" id="Nee" name="vraag10" value="nee">
      <label for="nee">nee, ik ben actief</label><br>
      <input type="radio" id="Matig" name="vraag10" value="matig">
      <label for="matig">ik kan soms lang en soms niet lang zitten.</label>
    <h3>
        vraag 15: kan je lang achter een computerscherm zitten?
    </h3>
      <input type="radio" id="Ja" name="vraag10" value="ja">
      <label for="ja">Ja, dat kan ik</label><br>
      <input type="radio" id="Nee" name="vraag10" value="nee">
      <label for="nee">nee, ik ben actief</label><br>
      <input type="radio" id="Matig" name="vraag10" value="matig">
      <label for="matig">ik kan soms lang en soms niet lang zitten.</label>
    <br>
    <br>
    <input type="submit" name="verzend">
</form>
</body>
</html>
