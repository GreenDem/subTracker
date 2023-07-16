<?php

Users::checkUser();
$user=Users::get($_SESSION['user']->idUser);

$id = $user->idUser;

