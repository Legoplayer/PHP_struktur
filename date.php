<?php
$page_title = "Kontakt"; 
include("includes/header.php"); ?>
    <div class="leftContent">
        <h2>Vilkor</h2>
        <h3></h3>
<?php
        // Skriver ut datum och klockslag
        print "<p><b>Datum/klockslag:</b> " . date("Y-m-d:H.i") . "</p>";
        
        
        // Kollar om det är söndag idag
        $idag = date ('l');

        if ($idag == "Sunday") {
            print "Idag är Söndag";
        } else {
            print "Idag är inte Söndag";
        }


        setlocale(LC_TIME, "de_DE");
        echo strftime(" in German %A.\n");
?>
        
    </div>
          
        </div>

        <main>
<?php include("includes/footer.php"); ?>