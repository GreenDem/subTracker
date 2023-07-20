<?php
require_once __DIR__ . '/../models/Categories.php';
require_once __DIR__ . '/../models/rates.php';
require_once __DIR__ . '/../models/subscriptions.php';

Users::checkUser();
$subscriptions = Subscriptions::get($_GET['id']);

$user= $_SESSION['user'];
$categories= Categories::getAll();
$rates = Rates::getAll();
$cat =[];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cat = array_column($categories, 'idCategory');
    $rat= array_column($rates, 'idRate');
    var_dump($cat);
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
    var_dump($cat);
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



    if (empty($error)){

        $subscription = new Subscriptions;
        $subscription->setDate_payment($date_payment);
        $subscription->setPrice($price);
        $subscription->setIdRate($rate);
        $subscription->setIdUser($_SESSION['user']->idUser);
        $subscription->setLabel($label);
        $subscription->setIdcategory($category);



        $isSubAdded = $subscription->update($subscriptions->idSubscription);

        if ($isSubAdded === true) {
            SessionFlash::setMessage('L\'abonnement a bien été modifié');
            header('location: /index.php?action=subHome');
            die;
        } else {
            SessionFlash::setMessage('Aucune modifcation');
            header('location: /index.php?action=subHome');
            die;        
        }

    }
}



include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/sub/users-sub-updated.php';
include __DIR__ . '/../views/templates/footer.php';