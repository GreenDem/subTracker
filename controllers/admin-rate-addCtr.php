<?php
require_once __DIR__ .'/../models/Rates.php';
Users::checkUser();
Users::checkAdmin();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $rate = filter_input(INPUT_POST, 'rate', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($rate)) {
        $error['rate'] = 'Le nom de la catégorie est obligatoire';
    }

    if (empty($error)){
        $rates = new Rates;
        $rates->setrates($rate);
        

        $isOk = $rates->add();

        if ($isOk) {
            SessionFlash::setMessage('La fréquence a bien été enregistré');
            header('location: /../index.php?action=dashrat');
            die;
        }else {
            SessionFlash::setMessage('La création n\'a été effectuée');
            header('location: /../index.php?action=dashrat');
        }
    }
}


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/admin/admin-rate-add.php';
include __DIR__ . '/../views/templates/footer.php';
