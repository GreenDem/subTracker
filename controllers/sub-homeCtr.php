<?php
require_once __DIR__ . '/../models/Subscriptions.php';

Users::checkUser();

$user= $_SESSION['user'];

$subscriptions = Subscriptions::getAll($user->idUser);
$users = Users::get($user->idUser);
$cost = 0;
$payment = 0;
foreach ($subscriptions as  $sub) {
    $cost = $cost + Subscriptions::calculCost($sub->price, $sub->rates);
}
$cost = ($cost /100);
$cost = number_format($cost,2,',');

foreach ($subscriptions as  $sub) {
    $payment = $payment + Subscriptions::calculPayment($sub->price, $sub->rates, $sub->date_payment);
}
$payment = ($payment /100);


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/sub/sub-home.php';
include __DIR__ . '/../views/templates/footer.php';
