<?php

Users::checkUser();
$user=Users::get($_SESSION['user']->idUser);

$subCSS = '<link rel="stylesheet" href="/public/assets/style/sub-home.css">';
$modalJS ='<script src="/public/assets/script/modal.js"></script>';
include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/users/profil.php';
include __DIR__ . '/../views/templates/footer.php';