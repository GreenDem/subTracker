<?php
require_once __DIR__ . '/../models/Subscriptions.php';

Users::checkUser();



$user= $_SESSION['user'];
var_dump($user);

$subscriptions = Subscriptions::getAll($user->idUser);


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/sub/sub-home.php';
include __DIR__ . '/../views/templates/footer.php';
