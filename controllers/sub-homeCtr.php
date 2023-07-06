<?php
require_once __DIR__ . '/../models/Subscriptions.php';
require_once __DIR__ . '/../models/Users.php';

Users::checkUser();

$user= $_SESSION['user'];


$subscriptions = Subscriptions::getAll(14);


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/sub/sub-home.php';
include __DIR__ . '/../views/templates/footer.php';
