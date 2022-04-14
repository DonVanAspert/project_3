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
<h1>
    Welkom op de Vragenlijst om een opleiding te zoeken die bij je past
</h1>
<form action="uitslag.php" method="post">
    <h3>
        Vraag 1: Heb jij echt verstand van computers en netwerken? Vind je het ook leuk om dienstverlenend te zijn?
    </h3>
      <input type="radio" id="Ja" name="vraag1" value="ja">
      <label for="ja">Ja, het lijkt me leuk</label><br>
      <input type="radio" id="Nee" name="vraag1" value="nee">
      <label for="nee">nee</label><br>
      <input type="radio" id="Matig" name="vraag1" value="matig">
      <label for="matig">er tussen in</label>
    <br>
    <h3>
        Vraag 2: Heb je interresse van het coderen van software (bijv. games , apps of websites)
    </h3>
      <input type="radio" id="Ja" name="vraag2" value="ja">
      <label for="ja">Ja, het lijkt me leuk</label><br>
      <input type="radio" id="Nee" name="vraag2" value="nee">
      <label for="nee">nee</label><br>
      <input type="radio" id="Matig" name="vraag2" value="matig">
      <label for="matig">er tussen in</label>
    <br>
    <h3>
    Vraag 3: Voel je je thuis in virtual reality? Communiceer je goed in bits & bytes? Vind je het ook leuk om dienstverlenend te zijn?
    </h3>
      <input type="radio" id="Ja" name="vraag3" value="ja">
      <label for="ja">Ja, het lijkt me leuk</label><br>
      <input type="radio" id="Nee" name="vraag3" value="nee">
      <label for="nee">nee</label><br>
      <input type="radio" id="Matig" name="vraag3" value="matig">
      <label for="matig">er tussen in</label>
    <br>
    <h3>
    Vraag 4: Wil jij later verantwoordelijk zijn voor de informatiesystemen waar de moderne maatschappij op draait?
    </h3>
      <input type="radio" id="Ja" name="vraag4" value="ja">
      <label for="ja">Ja</label><br>
      <input type="radio" id="Nee" name="vraag4" value="nee">
      <label for="nee">nee</label><br>
      <input type="radio" id="Matig" name="vraag4" value="matig">
      <label for="matig">er tussen in</label>
    <br>
    <h3>
        Vraag 5: Vindt je het leuk om computers te bouwen
    </h3>
      <input type="radio" id="Ja" name="vraag5" value="ja">
      <label for="ja">Ja, het lijkt me leuk</label><br>
      <input type="radio" id="Nee" name="vraag5" value="nee">
      <label for="nee">nee</label><br>
      <input type="radio" id="Matig" name="vraag5" value="matig">
      <label for="matig">er tussen in</label>
    <br>
    <h3>
    Vraag 6: heb je interesse gehad om websites of software te programeren
    </h3>
      <input type="radio" id="Ja" name="vraag6" value="ja">
      <label for="ja">Ja, het lijkt me leuk</label><br>
      <input type="radio" id="Nee" name="vraag6" value="nee">
      <label for="nee">nee</label><br>
      <input type="radio" id="Matig" name="vraag6" value="matig">
      <label for="matig">er tussen in</label>
    <br>
    <h3>
        vraag 7: vind je het leuk om met virtuele machines te werken
    </h3>
      <input type="radio" id="Ja" name="vraag7" value="ja">
      <label for="ja">Ja, het lijkt me leuk</label><br>
      <input type="radio" id="Nee" name="vraag7" value="nee">
      <label for="nee">nee</label><br>
      <input type="radio" id="Matig" name="vraag7" value="matig">
      <label for="matig">er tussen in</label>
    <h3>
        vraag 8: heb je ooit willen weten hoe ze video games maken?
    </h3>
      <input type="radio" id="Ja" name="vraag8" value="ja">
      <label for="ja">Ja</label><br>
      <input type="radio" id="Nee" name="vraag8" value="nee">
      <label for="nee">nee, ik heb geen zin</label><br>
      <input type="radio" id="Matig" name="vraag8" value="matig">
      <label for="matig"> er tussen in </label>

    <h3>
        vraag 9: heb je interresse om computers/servers op te zetten
    </h3>
      <input type="radio" id="Ja" name="vraag9" value="ja">
      <label for="ja"></label>Ik heb van anderen gehoord/gezien hoe het gedaan wordt en heb zin<br>
      <input type="radio" id="Nee" name="vraag9" value="nee">
      <label for="nee"></label>nee, ik heb geen zin in het opzetten<br>
      <input type="radio" id="Matig" name="vraag9" value="matig">
      <label for="matig"> er tussen in.</label>

    <h3>
        vraag 10: kan je lang achter een computerscherm zitten?
    </h3>
      <input type="radio" id="Ja" name="vraag10" value="ja">
      <label for="ja">Ja, dat kan ik</label><br>
      <input type="radio" id="Nee" name="vraag10" value="nee">
      <label for="nee">nee, ik ben actief</label><br>
      <input type="radio" id="Matig" name="vraag10" value="matig">
      <label for="matig">er tussen in.</label>
    <h3>
        vraag 11: vindt je het leuk om met netwerken te werken ?
    </h3>
      <input type="radio" id="Ja" name="vraag11" value="ja">
      <label for="ja">Ja, dat kan ik</label><br>
      <input type="radio" id="Nee" name="vraag11" value="nee">
      <label for="nee">nee, ik ben actief</label><br>
      <input type="radio" id="Matig" name="vraag11" value="matig">
      <label for="matig">er tussen in.</label>
    <h3>
        vraag 12: wil je later mensen helpen met hardware problemen van mensen/klanten?
    </h3>
      <input type="radio" id="Ja" name="vraag12" value="ja">
      <label for="ja">Ja, dat vindt ik leuk</label><br>
      <input type="radio" id="Nee" name="vraag12" value="nee">
      <label for="nee">nee</label><br>
      <input type="radio" id="Matig" name="vraag12" value="matig">
      <label for="matig">er tussen in.</label>
    <h3>
        vraag 13: vindt je het leuk om de verdediging van een website te testen?
    </h3>
      <input type="radio" id="Ja" name="vraag13" value="ja">
      <label for="ja">Ja</label><br>
      <input type="radio" id="Nee" name="vraag13" value="nee">
      <label for="nee">nee</label><br>
      <input type="radio" id="Matig" name="vraag13" value="matig">
      <label for="matig">er tussen in.</label>
    <h3>
        vraag 14: vindt je leuk om te sleutelen met computers?
    </h3>
      <input type="radio" id="Ja" name="vraag14" value="ja">
      <label for="ja">Ja, dat vindt ik leuk</label><br>
      <input type="radio" id="Nee" name="vraag14" value="nee">
      <label for="nee">nee, ik vindt dat niet leuk</label><br>
      <input type="radio" id="Matig" name="vraag14" value="matig">
      <label for="matig">er tussen in.</label>
    <h3>
        vraag 15: vindt je het leuk om mensen te verdedigen tegen cyber-aanvallen?
    </h3>
      <input type="radio" id="Ja" name="vraag15" value="ja">
      <label for="ja">Ja</label><br>
      <input type="radio" id="Nee" name="vraag15" value="nee">
      <label for="nee">nee, ik vindt dat niet zo leuk</label><br>
      <input type="radio" id="Matig" name="vraag15" value="matig">
      <label for="matig">er tussen in.</label>
    <br>
    <br>
    <input type="submit" name="verzend">
</form>
</body>
</html>
