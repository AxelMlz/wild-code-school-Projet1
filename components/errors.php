<?php if (!empty($errors)) : ?>

    <?php
    include 'components/result.php';
    ?>

    <h3>Merci de corriger les erreurs suivantes : </h3>

    <ul class='errorList'>
        <?php foreach ($errors as $error) : ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>

<?php endif; ?>