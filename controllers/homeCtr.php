<?php

if (!empty($_COOKIE['user'])) {
    $cookie = $_COOKIE['user'];
    if ($cookie) {
        $_SESSION['user'] = $cookie;
    }
}
if (!empty($_SESSION['user'])) {
    header('location: /../index.php?action=subHome');
    die;
}

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/home.php';
include __DIR__ . '/../views/templates/footer.php';
