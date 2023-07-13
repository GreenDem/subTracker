<?php

require_once __DIR__ . '/../models/subscriptions.php';
require_once __DIR__ . '/../models/labels.php';

$id=$_GET['id'];

Users::checkUser();
$subscriptions = Subscriptions::get($id);
$label = Labels::get($subscriptions->idLabel);
var_dump($subscriptions->idLabel);

$db = Database::getInstance();
$db->beginTransaction();

$isOk = Subscriptions::delete($id);
$islabelOk = Labels::delete($subscriptions->idLabel);


if ($isOk === true && $islabelOk === true) {
    $db->commit(); // Valide la transaction et exécute toutes les requetes
    SessionFlash::setMessage('L\'abonnement à bien été supprimé');
    header('location: /index.php?action=subHome');
    die;
} else {
    $db->rollBack(); // Annulation de toutes les requêtes exécutées avant la levée de l'exception
    SessionFlash::setMessage('Un problème est survenu lors de la suppression de l\'abonnement');
    header('location: /index.php?action=subHome');
    die;
}


