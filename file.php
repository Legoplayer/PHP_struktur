<?php
$page_title = "Läsa in fil";
include("includes/header.php"); ?>
<div class="leftContent">

    <?php


    $file = 'courses.txt';

    if (file_exists($file)) {
        readfile($file);
    } else {
        echo "Filen kunde inte hittas";
    }
    ?>

</div>
</div>
</div>