<?php
$title = "Postani Programer";
$naslov = "Postani Programer";
$nav =["Glavna", "O nama", "Kontakt"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $naslov ?></h1>
    <nav>
        <a href="#"><?= $nav[0] ?></a>
        <a href="#"><?= $nav[1] ?></a>
        <a href="#"><?= $nav[2] ?></a>

    </nav>
</body>
</html>