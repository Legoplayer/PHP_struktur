<?php
$page_title = "Formulär";
include("includes/header.php"); ?>
<div class="leftContent">
    <h2>Formulär</h2>

    <?php
if(isset($_REQUEST['f_name'.'L_name'])) {

}
 print $_REQUEST['f_name'.'L_name'] 
    ?>
    <table>
        <form method="GET" action="forms.php">
            Förnamn: <input type="text" id="namn" name="f_name">
            Efternamn: <input type="text" id="efternamn" name="L_name">
            <input type="submit" value="Send">

    </table>


    </form>
</div>

</div>

<main>
    <?php include("includes/footer.php"); ?>