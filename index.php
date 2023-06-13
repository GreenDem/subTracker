<?php

// try {
    $action = $_GET['action'] ?? '/';

    $ctrl = match ($action) {
        '/' => '/controllers/homeCtr.php',
        'signIn' => '/controllers/users-signInCtr.php',
        'signUp' => '/controllers/users-signUpCtr.php',
        'subHome' => '/controllers/sub-homeCtr.php',
        'add' => '/controllers/sub-addCtr.php',
        'dash' => '/controllers/dashboardCtr.php',
        'detailRdv' => '/controllers/detail-aptmCtr.php',
        'both' => '/controllers/add-bothCtr.php',
        
        default => '/controllers/404Ctrl.php'
    };

    require_once(__DIR__ . '/' . $ctrl);

// } catch (Exception $e) {
//     die('Erreur : ' . $e->getMessage());
//     die;
// }


