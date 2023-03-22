<?php
$page_title = "Om Sidan";
include("includes/header.php"); ?>
    <div class="leftContent">
        <h2>Variabler</h2>
        <h3>Utskrift:</h3>
    <?php
    $greeting = "Hej! ";
    $name = "Jag heter Babak Jameei, ";
    $age = "är 30 år gammal och ";
    $email = "nås på följande e-post: <a href='mailto:Babak.Jameei@outlook.com'>Babak.Jameei@outlook.com</a>";
    
    print $greeting . $name  . $age . $email;
    
    ?>
    
    </div>

</div>

<main>

    <?php include("includes/footer.php"); ?>