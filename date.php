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


    ?>

</div>

</div>

<main>
    <?php include("includes/footer.php"); ?>