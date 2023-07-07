<?php
Users::checkUser();
Users::checkAdmin();
$id=4;
$users = new Users;
$users->setLastname('Nathan');
$users->setFirstname('demory');
$users->setMail('nathan.demory@gmail.com');
$users->setPassword('mwarf');
$test = $users->delete(31);
var_dump($test);
$user = Users::getAll();


include __DIR__ . '/../views/templates/header.php';
    include __DIR__ . '/../views/dashboard.php';
include __DIR__ . '/../views/templates/footer.php';