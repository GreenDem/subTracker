<?php

// try {
    require_once __DIR__ . '/config/init.php';
    require_once __DIR__ . '/models/Users.php';
    $action = $_GET['action'] ?? '/';

    $ctrl = match ($action) {
        '/' => '/controllers/homeCtr.php',
        'signIn' => '/controllers/users-signInCtr.php',
        'signUp' => '/controllers/users-signUpCtr.php',
        'subHome' => '/controllers/sub-homeCtr.php',
        'add' => '/controllers/sub-addCtr.php',
        'dash' => '/controllers/dashboardCtr.php',
        'logOut' => '/controllers/logOutCtr.php',
        'both' => '/controllers/add-bothCtr.php',
        'aUpdated' => '/controllers/admin-updatedCtr.php',
        'aDeleted' => '/controllers/admin-deletedCtr.php',
        
        default => '/controllers/404Ctrl.php'
    };

    require_once(__DIR__ . '/' . $ctrl);

// } catch (Exception $e) {
//     die('Erreur : ' . $e->getMessage());
//     die;
// }


