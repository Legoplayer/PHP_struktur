<?php
$page_title = "Formulär";
include("includes/header.php"); ?>
<div class="leftContent">
    <h2>Formulär</h2>
    <h3>Skicka data med GET</h3>
    <?php


    if (isset($_GET['submit'])) {
        $firstname = $_GET['firstname'];
        $lastname = $_GET['lastname'];

        if (empty($firstname) || empty($lastname)) {
            print "<p><span style='color: #ff1000;'><b>Vänligen fyll i båda fälten!</b></p></span>";
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
        


    </form>


    <td><h3>Skicka data med POST</h3></td>
    <form action="calculate.php" method="POST">

    <tr>
      <td><label for="length">Längd:</label></td>
      <td><input type="number" id="length" name="length"></td>
    </tr>
    <tr>
      <td><label for="width">Bredd:</label></td>
      <td><input type="number" id="width" name="width"></td>
    </tr>
    <tr>
      <td></td>
      <td><button type="submit" name="submit2">Beräkna</button></td>
    </tr>
  </table>
</form>


</div>

</div>

<main>
    <?php include("includes/footer.php"); ?>