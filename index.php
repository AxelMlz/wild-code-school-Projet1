<?php
include "components/texts.html";
include "components/texts.html";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Seaweed+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title>René Magritte Portfolio</title>
</head>

<body>
    <div class="centered">
        <header>
            <?php
            require "components/header.html";
            ?>
        </header>
        <section id="texts">
            <?php
            require "components/texts.html";
            ?>
            <h2>Mon Histoire</h2>
            <div class="bloc-container">

            </div>
        </section>
        <section id="paintings">
            <h2>Mes oeuvres</h2>
            <h1>Hello !!! </h1>
            
            <?php
            require "components/paintings.html";
            ?>
        </section>
        <section id="form">
            <?php
            require "components/form.html";
            ?>
        </section>
        <footer>
            <?php
            require "components/footer.html";
            ?>
        </footer>
    </div>
</body>

</html>