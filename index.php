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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Seaweed+Script&display=swap"
        rel="stylesheet">
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


            <div class="parent">

                <div id="div1" class="grid">
                    Rene Magritte, l'un des artistes surréalistes les plus emblématiques du 20e siècle, est né le 21
                    novembre 1898 à Lessines, en Belgique. Sa passion pour l'art a été évidente dès son plus jeune âge,
                    et il a étudié à l'Académie Royale des Beaux-Arts de Bruxelles. Cependant, il a rapidement trouvé
                    l'enseignement traditionnel restrictif et a commencé à explorer des styles plus avant-gardistes.
                </div>
                <div id="div2" class="grid">
                    Dans les années 1920, Magritte a déménagé à Paris, où il a été influencé par le mouvement
                    surréaliste émergent. Il a travaillé aux côtés d'artistes comme André Breton et Salvador Dalí,
                    explorant les profondeurs de l'inconscient à travers son art. Ses œuvres les plus célèbres de cette
                    époque incluent "La Trahison des images" avec sa phrase emblématique "Ceci n'est pas une pipe".
                </div>
                <div id="div3" class="grid">

                    Au début de sa carrière, Magritte a travaillé dans une agence publicitaire pour subvenir à ses
                    besoins financiers, tout en peignant et en développant son style artistique unique en parallèle. Il
                    a expérimenté diverses techniques et a finalement développé son style distinctif de réalisme
                    magique, caractérisé par des représentations précises d'objets ordinaires dans des contextes
                    insolites.

                </div>
                <div id="div4" class="grid">
                    Malgré sa renommée internationale, Magritte a maintenu une vie privée réservée. Il était connu pour
                    être un homme tranquille et introverti, préférant se concentrer sur son travail plutôt que sur la
                    célébrité. Il a vécu la majeure partie de sa vie en Belgique avec sa femme, Georgette, qui est
                    également devenue une muse pour ses peintures.
                </div>
                <div id="div5" class="grid">
                    À la fin de sa vie, Magritte a continué à produire des œuvres d'une profondeur conceptuelle
                    remarquable. Il est décédé le 15 août 1967 à Bruxelles, laissant derrière lui un héritage artistique
                    durable qui continue d'inspirer et de fasciner les générations suivantes d'artistes et de
                    spectateurs.
                </div>

            </div>
        </section>
        <section id="paintings">

            <h2>Mes oeuvres</h2>

            <?php
            require "components/paintings.html";
            ?>
        </section>
        <section id="form">
            <?php
            require "components/form.html";
            ?>
        </section>
    </div>
    <footer>
        <?php
        require "components/footer.html";
        ?>
    </footer>

</body>

</html>