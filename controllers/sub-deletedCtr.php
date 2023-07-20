<?php

require_once __DIR__ . '/../models/Subscriptions.php';

$id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));;

Users::checkUser();
$subscriptions = Subscriptions::get($id);

$isOk = Subscriptions::delete($id);


if ($isOk === true) {
    SessionFlash::setMessage('L\'abonnement à bien été supprimé');
    header('location: /index.php?action=subHome');
    die;
} else {
    SessionFlash::setMessage('Un problème est survenu lors de la suppression de l\'abonnement');
    header('location: /index.php?action=subHome');
    die;
}
