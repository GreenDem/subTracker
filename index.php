<?php

// try {
    $action = $_GET['action'] ?? '/';

    $ctrl = match ($action) {
        '/' => '/controllers/list-patientsCtr.php',
        'add' => '/controllers/add-patientsCtr.php',
        'list' => '/controllers/list-patientsCtr.php',
        'profil' => '/controllers/profil-patientsCtr.php',
        'rdv' => '/controllers/add-aptmCtr.php',
        'listRdv' => '/controllers/list-aptmCtr.php',
        'detailRdv' => '/controllers/detail-aptmCtr.php',
        'both' => '/controllers/add-bothCtr.php',
        
        default => '/controllers/404Ctrl.php'
    };

    require_once(__DIR__ . '/' . $ctrl);

// } catch (Exception $e) {
//     die('Erreur : ' . $e->getMessage());
//     die;
// }


