<?php
require_once __DIR__ . '/../models/Categories.php';
require_once __DIR__ . '/../models/Rates.php';
require_once __DIR__ . '/../models/Subscriptions.php';
Users::checkUser();
$categories= Categories::getAll();
$rates = Rates::getAll();
// que du back et redirection 
$cat =[];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cat = array_column($categories, 'idCategory');
    $rat= array_column($rates, 'idRate');
    // ==============================REQUIS=================================


    // ========         LABEL       =========

    $label = filter_input(INPUT_POST, 'label', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if (empty($label)) {
        $error['label'] = "Le champ ne peut pas être vide";
    } else {
        if (strlen($label) > 50) {
            $error['label'] = "Le titre est trop long";
        }
    }
    // ==========     CATEGORY      =========
    $category =  filter_input(INPUT_POST, 'category', FILTER_SANITIZE_NUMBER_INT);;
    if (empty($category)) {
        $error['category'] = "Le champ ne peut pas être vide";
    } else {
        if (!in_array($category, $cat)){
            $error['category'] = "La catégory doit se trouver dans la liste";
        }
    }

    // =============RATES================

    $rate = filter_input(INPUT_POST, 'rates', FILTER_SANITIZE_NUMBER_INT);
    if (empty($rate)) {
        $error['rates'] = "Champ Obligatoire";
    } else {
        if (!in_array($rate, $rat)){
            $error['rates'] = "La fréquence doit se trouver dans la liste";
        }
    }


    // ===============DUE PAYMENT=================

    $date_payment = filter_input(INPUT_POST, 'date_payment', FILTER_SANITIZE_SPECIAL_CHARS);
    if (!empty($date_payment)) {
        $isOk = filter_var($date_payment, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/' . DATE . '/']]);
        if (!$isOk) {
            $error["date_payment"] = "La date entrée n'est pas valide!";
        }
    } else {
        $error["date_payment"] = "Champ Obligatoire";
    }

    // ===============      PRICE         ================ FLOAT(5,2)
    $price = $_POST['price'];
    if (empty($price)) {
        $error['price'] = "Le champ ne peut pas être vide";
    } else {
        $price = $_POST['price']*100;
        $price = intval(filter_var($price, FILTER_SANITIZE_NUMBER_INT ));
        if ($price < 0) {
            $error['price'] = "Le tarif ne peut pas être négatif";
        }
    }




    // // ========================= NO REQUIRED ===============================


    // // =======================DATE START=======================
    // $date_start = filter_input(INPUT_POST, 'date_start', FILTER_SANITIZE_SPECIAL_CHARS);
    // if (!empty($date_start)) {
    //     $isOk = filter_var($date_start, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/' . REGEXP_DATE . '/']]);
    //     if (!$isOk) {
    //         $error["date_start"] = "La date entrée n'est pas valide!";
    //     }
    // } else {
    //     $date_start = null;
    // }

    // // ====================== DATE END ==============================
    // $date_end = filter_input(INPUT_POST, 'date_end', FILTER_SANITIZE_SPECIAL_CHARS);
    // if (!empty($date_end)) {
    //     $isOk = filter_var($date_end, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/' . REGEXP_DATE . '/']]);
    //     if (!$isOk) {
    //         $error["date_end"] = "La date entrée n'est pas valide!";
    //     }
    // }else {
    //     $date_start = null;
    // }


    if (empty($error)){

        $subscriptions = new Subscriptions;
        // $subscriptions->setDate_start($date_start);
        // $subscriptions->setDate_end($date_end);
        $subscriptions->setDate_payment($date_payment);
        $subscriptions->setPrice($price);
        $subscriptions->setIdRate($rate);
        $subscriptions->setIdUser($_SESSION['user']->idUser);
        $subscriptions->setLabel($label);
        $subscriptions->setIdcategory($category);

        $db = Database::getInstance();

        $isSubAdded = $subscriptions->add();

        if ($isSubAdded === true) {
            SessionFlash::setMessage('L\'abonnement à bien été ajouté');
            header('location: /index.php?action=subHome');
            die;
        } else {
            SessionFlash::setMessage('Un problème est survenu lors de l\'ajout de l\'abonnement. Aucun ajout n\'a été effectué');
            header('location: /index.php?action=subHome');
            die;
        }

    }
}


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/sub/sub-add.php';
include __DIR__ . '/../views/templates/footer.php';
