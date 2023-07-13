<?php

require_once __DIR__ .'/../models/Rates.php';
Users::checkUser();
Users::checkAdmin();


$rateID = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));


$isDeleted =Rates::delete($rateID);

if ($isDeleted) {
    SessionFlash::setMessage('La Supression a bien été effectuée');
    header('location: /../index.php?action=dashrat');
    die;
}else {
    SessionFlash::setMessage('Erreur lors de la supression');
    header('location: /../index.php?action=dashrat');
}