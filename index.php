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
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title>René Magritte Portfolio</title>
</head>

<body>
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
</body>

</html>