<?php
require_once __DIR__ . '/../models/Subscriptions.php';

Users::checkUser();
$user=Users::get($_SESSION['user']->idUser);

var_dump($user);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($firstname)) {
        $error['firstname'] = 'Le prénom est obligatoire.';
    }


    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($lastname)) {
        $error['lastname'] = 'Le nom est obligatoire.';
    } else {
        // if (!preg_match("/" . $regex['lastname'] . "/", $lastname)) {
        //     $error['lastname'] = "Il y a une erreur dans votre nom";
        // }
    }


    if (empty($error)) {

        $users = new Users;
        $users->setLastname($lastname);
        $users->setFirstname($firstname);

        $isOk = $users->update($user->idUser);

        if ($isOk) {
            SessionFlash::setMessage('Votre compte a bien était crée.');
            header('location: /../index.php?action=profil');
            die;
        }
    }
}


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/users/updated.php';
include __DIR__ . '/../views/templates/footer.php';