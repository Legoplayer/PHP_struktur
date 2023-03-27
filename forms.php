<?php
$page_title = "Formulär";
include("includes/header.php"); ?>
<div class="leftContent">
    <h2>Formulär</h2>
<?php
    

    if (isset($_GET['submit'])) {
        $firstname = $_GET['firstname'];
        $lastname = $_GET['lastname'];
    
        if (empty($firstname) || empty($lastname)) {
            print "<p><span style='color: red;'><b>Vänligen fyll i båda fälten!</b></p></span>";
        } else {
            echo "<p> Hej $firstname $lastname!";
        }
    }
   
 ?>
    <form method="get" action="forms.php">
    <table>
            <tr>
                <td>Förnamn:</td>
                <td><input type="text" name="firstname"></td>
            </tr>
            <tr>
                <td>Efternamn:</td>
                <td><input type="text" name="lastname"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Skicka"></td>
            </tr>
        </table>
    </form>


    

</div>

</div>

<main>
    <?php include("includes/footer.php"); ?>