<?php

Users::checkUser();
$user=Users::get($_SESSION['user']->idUser);

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/users/profil.php';
include __DIR__ . '/../views/templates/footer.php';