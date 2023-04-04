<?php
$page_title = "Beräkna Arean";
include("includes/header.php"); ?>
<div class="leftContent">
    <h3>Beräkna Area</h3>

    <?php
    if (isset($_POST['submit2'])) {
        $length = $_POST['length'];
        $width = $_POST['width'];

        if (empty($length) || empty($width)) {
            print "<p><span style='color: #ff1000;'><b>Både längd och bredd måste anges!</b></p></span>";
        } else {
            echo 'Längden ' . $length . ' meter och bredden ' . $width . ' meter ger en area på ' . $length * $width . ' kvadratmeter.';
        }
    }



    ?>

    <br><br>

    <a href="forms.php">Gå tillbaks till föregående sida.</a>