<?php
require_once __DIR__ .'/../models/Rates.php';
Users::checkUser();
Users::checkAdmin();

$rateID = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));


$rate = Rates::get($rateID);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $rate = filter_input(INPUT_POST, 'rate', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($rate)) {
        $error['rate'] = 'Le prénom est obligatoire.';
    }

    if (empty($error)){
        $rates = new Rates;
        $rates->setRates($rate);
        

        $isOk = $rates->update($rateID);

        if ($isOk) {
            SessionFlash::setMessage('La Modification a bien été enregistré');
            header('location: /../index.php?action=dashrat');
            die;
        }else {
            SessionFlash::setMessage('Aucune modification n\'a été effectuée');
            header('location: /../index.php?action=dashrat');
        }
    }
}


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/admin/admin-rate-updated.php';
include __DIR__ . '/../views/templates/footer.php';
