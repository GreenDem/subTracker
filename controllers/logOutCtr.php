<?php
require_once __DIR__ . '/../helpers/SessionFlash.php';
SessionFlash::start();
session_unset();
session_destroy();
  // Suppression du cookie 
  setcookie('user');
  // Suppression de la valeur du tableau $_COOKIE
  unset($_COOKIE['user']);

  header('location: /../index.php');
  die;