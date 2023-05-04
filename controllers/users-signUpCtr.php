<?php
require_once __DIR__ . '/../config/init.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $psw = $_POST['password'];
    $psw2 = $_POST['passwordCtr'];

    if ($psw != $psw2) {
        $error['password'] = "Les mots de passent doivent etre identiques";
    } else {
        $psw = password_hash($psw, PASSWORD_DEFAULT);
    }

    $mail =  filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL);
    if (empty($mail)) {
        $error['mail'] = 'Le mail est obligatoire';
    } else {
        $mail =  filter_var($mail, FILTER_VALIDATE_EMAIL);
        if ($mail == false) {
            $error['mail'] = "Format de mail non accepté";
        }
    }

    $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($firstName)) {
        $error['firstName'] = 'Le prénom est obligatoire.';
    } else {
        if (!preg_match("/" . $regex['lastName'] . "/", $firstName)) {
            $error['firstName'] = "Il y a une erreur dans votre nom";
        }
    }

    $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($lastName)) {
        $error['lastName'] = 'Le nom est obligatoire.';
    } else {
        if (!preg_match("/" . $regex['lastName'] . "/", $lastName)) {
            $error['lastName'] = "Il y a une erreur dans votre nom";
        }
    }
}

include __DIR__ . '/../views/templates/header.php';
    include __DIR__ . '/../views/users/form-SignUP.php';
include __DIR__ . '/../views/templates/footer.php';













