<?php
require_once __DIR__ . '/../models/subscriptions.php';
require_once __DIR__ . '/../models/labels.php';


Users::checkUser();
$user = Users::get($_SESSION['user']->idUser);
$id = $user->idUser;



$db = Database::getInstance();
$db->beginTransaction();


$isSubDeleted = Subscriptions::deleteByUser($id);
$isProfileDeleted = Users::delete($id);

if ($isSubDeleted === true && $isProfileDeleted === true) {
    $db->commit(); // Valide la transaction et exécute toutes les requetes
    SessionFlash::setMessage('Votre compte à bien été supprimé');
    header('location: /index.php?action=logOut');
    die;
} else {
    $db->rollBack(); // Annulation de toutes les requêtes exécutées avant la levée de l'exception
    SessionFlash::setMessage('Erreur lors de la supression de votre compte');
    header('location: /index.php?action=subHome');
    die;
}
