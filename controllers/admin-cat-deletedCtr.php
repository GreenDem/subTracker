<?php

require_once __DIR__ .'/../models/Categories.php';
Users::checkUser();
Users::checkAdmin();


$catID = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));


$isDeleted =Categories::delete($catID);

if ($isDeleted) {
    SessionFlash::setMessage('La Supression a bien été effectuée');
    header('location: /../index.php?action=dashcat');
    die;
}else {
    SessionFlash::setMessage('Erreur lors de la supression');
    header('location: /../index.php?action=dashcat');
}