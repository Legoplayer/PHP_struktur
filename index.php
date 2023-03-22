<?php
$page_title = "Startsida";
include("includes/header.php"); ?>
<div class="leftContent">
    <h2>Frågor & Svar</h2>

    <h3><i>Har du tidigare erfarenhet av utveckling med PHP?</i> </h3>
    <p><b>Svar: </b> Nej, detta är första gången jag introduceras till PHP</p><br><hr>

    <h3>vad du upplever är fördelarna med att använda PHP?</h3>
    <p><b>Svar: </b>Den största fördelen hittils verkar vara möjligheten till att inkludera filer innehållandes html-kod och därmed minska upprepningar.
    Vilket både gör att att det blir mindre klutter i koden när man arbetar med sina undersidor samt att webbplatsen laddar snabbare då mindre text används. 
    </p> <br> <hr>
    <h3>Hur har du valt att strukturera upp dina filer och kataloger?</h3>
    <p><b>Svar: </b>Samtliga undersidor med Index inkluderat ligger i root katalogen. I denna katalogen
    ligger även mappar för CSS, includes och JavaScript innehållandes tillhörande filer.   </p> <br><hr>
    <h3>Har du följt guiden, eller skapat på egen hand?</h3>
    <p><b>Svar: </b> Jag har följt guiden ganska noga</p> <br><hr>
    <h3>Har du gjort några förbättringar eller vidareutvecklingar av guiden (om du följt denna)?</h3>
    <p><b>Svar: </b> för att minimera antalet PHP filer i includes, så inkluderade jag alla element som är identiska över samtliga undersidor
    i "header.php" så HEAD, HEADER och NAV(sidebar) är alla i samma fil. Footer är separerat på grund av positionen, vilket jag nu i skrivande stund
    inser att jag säkert också kan inkludera i header.php och sedan använda CSS positon för att placera längst ner på sidan.. men vi börjar såhär! </p> <br><hr>
    <h3>Vilken utvecklingsmiljö har du använt för uppgiften</h3>
    <p><b>Svar: </b> Jag har användt Wampserver 3.3.0 med PHP 8.2 som inkluderades </p><br><hr>
    <h3>Har något varit svårt med denna uppgift?</h3>
    <p><b>Svar: </b> Att bestämma mig för den grafiska profilen!</p>
    
</div>

</div>

<main>
    <?php include("includes/footer.php"); ?>