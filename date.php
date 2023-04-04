<?php
$page_title = "Kontakt";
include("includes/header.php"); ?>
<div class="leftContent">
    <h2>Vilkor</h2>
    <?php
    // Skriver ut datum och klockslag
    print "<p><b>Datum/klockslag:</b> " . date("Y-m-d:H.i") . "</p> <br>";


    // Kollar om det är söndag idag
    $idag = date('l');

    if ($idag == "Sunday") {
        print "<p>Idag är Söndag</p>";
    } else {
        print "<p>Idag är inte Söndag</p>";
    }

    // Skriver ut om det är morgon, kväll eller annat
    $hour = date('H');
    if ($hour >= 6 && $hour <= 9) {
        echo '<p><br> Det är morgon</p>';
    } elseif ($hour >= 9 && $hour <= 12) {
        echo '<p>Det är förmiddag</p>';
    } elseif ($hour >= 12 && $hour <= 18) {
        echo '<p>Det är eftermiddag</p>';
    } else {
        echo '<p><br> Det är kväll/natt</p>';
    }

// Sätter locale till Svenska
$locale = 'sv_SE';

// Skapar date formatter objekt
$dateFormatter = new IntlDateFormatter(
    $locale,
    IntlDateFormatter::NONE,
    IntlDateFormatter::NONE
);

//Sätter date formatter till att visa veckodag
$dateFormatter->setPattern('EEEE');

// Skapar variabel med veckodag på Svenska
$dayOfWeek = $dateFormatter->format(new DateTime());

// Skriver ut dag till skärmen på svenska 
echo "<br>Idag är det " . $dayOfWeek;

    ?>

</div>

</div>

<main>
    <?php include("includes/footer.php"); ?>