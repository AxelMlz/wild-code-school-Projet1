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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu viverra turpis, id sodales dolor.
                    Ut
                    rutrum molestie tellus, sit amet tincidunt tortor tincidunt non. Duis in faucibus lectus, ut dapibus
                    massa. Proin ut nulla eget odio vulputate tempus at non diam. Nunc et ipsum semper, sagittis justo
                    sit
                    amet, rhoncus nisi. Donec urna dui, rutrum at pharetra a, tempor eu lectus. Suspendisse diam sapien,
                    vestibulum non vehicula a, faucibus in ante. Pellentesque egestas commodo leo vel tempus. Maecenas
                    vestibulum molestie suscipit. Pellentesque iaculis sapien nec est consectetur placerat.
                </div>
                <div id="div2" class="grid">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu viverra turpis, id sodales dolor.
                    Ut
                    rutrum molestie tellus, sit amet tincidunt tortor tincidunt non. Duis in faucibus lectus, ut dapibus
                    massa. Proin ut nulla eget odio vulputate tempus at non diam. Nunc et ipsum semper, sagittis justo
                    sit
                    amet, rhoncus nisi. Donec urna dui, rutrum at pharetra a, tempor eu lectus. Suspendisse diam sapien,
                    vestibulum non vehicula a, faucibus in ante. Pellentesque egestas commodo leo vel tempus. Maecenas
                    vestibulum molestie suscipit. Pellentesque iaculis sapien nec est consectetur placerat.
                </div>
                <div id="div3" class="grid">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu viverra turpis, id sodales dolor.
                    Ut
                    rutrum molestie tellus, sit amet tincidunt tortor tincidunt non. Duis in faucibus lectus, ut dapibus
                    massa. Proin ut nulla eget odio vulputate tempus at non diam. Nunc et ipsum semper, sagittis justo
                    sit
                    amet, rhoncus nisi. Donec urna dui, rutrum at pharetra a, tempor eu lectus. Suspendisse diam sapien,
                    vestibulum non vehicula a, faucibus in ante. Pellentesque egestas commodo leo vel tempus. Maecenas
                    vestibulum molestie suscipit. Pellentesque iaculis sapien nec est consectetur placerat.
                </div>
                <div id="div4" class="grid">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu viverra turpis, id sodales dolor.
                    Ut
                    rutrum molestie tellus, sit amet tincidunt tortor tincidunt non. Duis in faucibus lectus, ut dapibus
                    massa. Proin ut nulla eget odio vulputate tempus at non diam. Nunc et ipsum semper, sagittis justo
                    sit
                    amet, rhoncus nisi. Donec urna dui, rutrum at pharetra a, tempor eu lectus. Suspendisse diam sapien,
                    vestibulum non vehicula a, faucibus in ante. Pellentesque egestas commodo leo vel tempus. Maecenas
                    vestibulum molestie suscipit. Pellentesque iaculis sapien nec est consectetur placerat.
                </div>
                <div id="div5" class="grid">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu viverra turpis, id sodales dolor.
                    Ut
                    rutrum molestie tellus, sit amet tincidunt tortor tincidunt non. Duis in faucibus lectus, ut dapibus
                    massa. Proin ut nulla eget odio vulputate tempus at non diam. Nunc et ipsum semper, sagittis justo
                    sit
                    amet, rhoncus nisi. Donec urna dui, rutrum at pharetra a, tempor eu lectus. Suspendisse diam sapien,
                    vestibulum non vehicula a, faucibus in ante. Pellentesque egestas commodo leo vel tempus. Maecenas
                    vestibulum molestie suscipit. Pellentesque iaculis sapien nec est consectetur placerat.
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