<?php include("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="se">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site_title . $divider . $page_title; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>PHP Struktur</h1>
            <div class="header_block">

            </div>
        </header>

        <div class="container_content">
            <div class="rightSidebar">
                <h2>Sidebar</h2>
                <nav>
                    <ul>
                        <li><a href="index.php">Startsida</a></li>
                        <li><a href="variabler.php">Variabler</a></li>
                        <li><a href="date.php">Vilkor</a></li>
                        <li><a href="loop.php">Upprepningar</a></li>
                        <li><a href="forms.php">Formulär</a></li>
                        <li><a href="file.php">Läsa in fil</a></li>
                    </ul>
                </nav>
            </div>