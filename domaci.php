<?php
$title = "Postani Programer";
$naslov = "Postani Programer";
$footer = date("Y");
$nav =[
        [
            "naziv"=>"Glavna", 
            "link"=>"home.php",
        ],

        [
            "naziv"=>"O nama",
            "link"=>"about_us.php",
        ], 
        [ 
            "naziv"=>"Kontakt",
            "link"=>"contact.php",

        ],



    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $naslov ?></h1>
    <nav>
        <a href=<?="{$nav[0]['link'] }"?>><?= $nav[0]['naziv'] ?></a>
        <a href=<?="{$nav[1]['link'] }"?>><?= $nav[1]['naziv'] ?></a>
        <a href=<?="{$nav[2]['link'] }"?>><?= $nav[2]['naziv'] ?></a>

    </nav>
</body>
<footer>Copyroght © mojsajt <?=$footer?></footer>
</html>