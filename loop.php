<?php
$page_title = "Upprepningar";
include("includes/header.php");
?>

<div class="leftContent">

  <?php

  for ($i = 10; $i >= 1; $i--)

    echo "<br>" . $i;

  echo "<ul>";

  $courses = array(
    "Webbutveckling I", "Introduktion till programmering i JavaScript", "Grafisk teknik för webb", "Webbanvändbarhet",
    "Databaser", "Frontend-baserad webbutveckling", "Backend-baserad webbutveckling", "Programmering i TypeScript"
  );

  foreach ($courses as $value) {
    echo "<li>" . $value;
  };

  echo '<br><br><ul>';

  sort($courses);

  $clength = count($courses);
  for ($x = 0; $x < $clength; $x++) {
    echo '<li>' . $courses[$x];
  }

  ?>

</div>

</div>

<main>
  <?php include("includes/footer.php"); ?>