<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = array_map('htmlentities', array_map('trim',$_POST));

    $errors = [];

    // foreach($data as $key => $value) {
    //     if (empty($value)) {
    //         $errors[] = "Veuillez saisir un $key";
    //     }
    // }

    if (empty($data['email'])) {
        $errors[] = "Veuillez saisir un email";
    }

    if (empty($data['objet'])) {
        $errors[] = "Veuillez saisir un objet";
    }

    if (empty($data['message'])) {
        $errors[] = "Veuillez saisir un message";
    }

    if (filter_var($data['email'], FILTER_VALIDATE_EMAIL) === true) {
        $errors[] = "Le format de votre addresse mail semble incorrect";
    }

    if (strlen($data['message']) < 30 ) {
        $errors[] = 'Le message semble un peu leger, pouvez vous nous en dire plus.';
    }

    // var_dump($errors);
}

