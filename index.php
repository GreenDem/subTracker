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
        'dash' => '/controllers/dashboard-userCtr.php',
        'dashcat' => '/controllers/dashboard-categoryCtr.php',
        'dashrat' => '/controllers/dashboard-ratesCtr.php',
        'logOut' => '/controllers/logOutCtr.php',
        'aUpdated' => '/controllers/admin-updatedCtr.php',
        'aDeleted' => '/controllers/admin-deletedCtr.php',
        'catUpdated' => '/controllers/admin-cat-updatedCtr.php',
        'catADD' => '/controllers/admin-cat-addCtr.php',
        'catDeleted' => '/controllers/admin-cat-deletedCtr.php',
        'rateUpdated' => '/controllers/admin-rate-updatedCtr.php',
        'rateADD' => '/controllers/admin-rate-addCtr.php',
        'rateDeleted' => '/controllers/admin-rate-deletedCtr.php',
        'subUpdated' => '/controllers/users-sub-updatedCtr.php',
        'subdeleted' => '/controllers/users-sub-deletedCtr.php',
        'subdeletedYes' => '/controllers/sub-deletedCtr.php',
        'profil' => '/controllers/users-profilCtr.php',
        'userUpdated' => '/controllers/users-updatedCtr.php',
        'userDeleted' => '/controllers/users-deletedCtr.php',
        'userPassword' => '/controllers/users-passwordCtr.php',
        
        default => '/controllers/404Ctrl.php'
    };

    require_once(__DIR__ . '/' . $ctrl);

// } catch (Exception $e) {
//     die('Erreur : ' . $e->getMessage());
//     die;
// }


