<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title></title>
    <meta name='description' content=''>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap'
        rel='stylesheet'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Seaweed+Script&display=swap' rel='stylesheet'>
    <script src='https://kit.fontawesome.com/f51b316861.js' crossorigin='anonymous'></script>
    <link rel='stylesheet' href='css_components/reset.css'>
    <link rel='stylesheet' href='css_components/style.css'>
    <link rel='stylesheet' href='css_components/phonestyle.css' media='(max-width: 768px)'>
    <link rel='stylesheet' href='css_components/smallphonestyle.css' media='(max-width: 320px)'>
    <script async src="script.js"></script>
    <title>René Magritte Portfolio</title>
</head>

<body>
    <div class='body__all__centered'>
        <header>
            <?php
                require 'components/header.html';
            ?>
        </header>
        <section id='texts'>
            <?php
                require 'components/texts.html';
            ?>
        </section>
        <section id='paintings'>
            <?php
                require 'components/paintings.php';
            ?>
        </section>
        <section id='form__field__color--shape__field__color--shape'>
            <?php
                require 'components/form.php';
            ?>
        </section>
    </div>
        <footer>
            <div class='body__all__centered'>
                <?php
                    require 'components/footer.html';
                ?>
            <div class='body__all__centered'>
        </footer>
</body>

</html>