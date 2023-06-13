<?php

// que du back et redirection 

if ($_SERVER['REQUEST_METHOD']== 'POST') {

// ==============================REQUIS=================================


// ========         LABEL       =========

$subTitile = filter_input(INPUT_POST, 'label', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
if (empty($label)){
    $error['label']= "Le champ ne peut pas être vide";
} else {
    if (strlen($label) > 50){
        $error['label']= "Le titre est trop long";
    }
}

// ==========     CATEGORY      =========
$category= $_POST['category'];
if (empty($category)){
    $error['category']= "Le champ ne peut pas être vide";
} else{
    if (in_array($category, CATEGORY) == false){
        $error['category'] = 'Une erreur est survenue';
    }
}

// =============RATES================

$category= $_POST['rates'];
if (empty($rates)){
    $error['rates']= "Champ Obligatoire";
} else{
    if (in_array($rates, RATE)== false){
        $error['rates'] = 'Une erreur est survenue';
    }
}

// ===============DUE PAYMENT=================

$date_payment = filter_input(INPUT_POST, 'date_payment', FILTER_SANITIZE_NUMBER_INT);
if (!empty($date_payment)) {
    $isOk = filter_var($date_payment, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/' . $regex['date'] . '/']]);
    if (!$isOk) {
        $error["date_payment"] = "La date entrée n'est pas valide!";
    }
} else {
    $error["date_payment"] = "Champ Obligatoire";
}

// ===============      PRICE         ================ FLOAT(5,2)
$tariff = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_INT);
if (empty($price)){
    $error['price']= "Le champ ne peut pas être vide";
}else {
    if ($price < 0) {
        $error['price']= "Le tarif ne peut pas être négatif";
    }
}




// ========================= NO REQUIRED ===============================


// =======================DATE START=======================
$date_start = filter_input(INPUT_POST, 'date_start', FILTER_SANITIZE_NUMBER_INT);
if (!empty($date_start)) {
    $isOk = filter_var($date_start, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/' . $regex['date'] . '/']]);
    if (!$isOk) {
        $error["date_start"] = "La date entrée n'est pas valide!";
    }
}

// ====================== DATE END ==============================
$date_end = filter_input(INPUT_POST, 'date_end', FILTER_SANITIZE_NUMBER_INT);
if (!empty($date_end)) {
    $isOk = filter_var($date_end, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/' . $regex['date'] . '/']]);
    if (!$isOk) {
        $error["date_end"] = "La date entrée n'est pas valide!";
    }
}

// }if ($_SERVER["REQUEST_METHOD"] != "POST" || !empty($error)) {
//     // ===========REDIRECTION APRES VALIDATION==========
//     header('location : /') ;
// } else {
//     // ======================SINON RENVOYER FORMULAIRE=========
//     include(__DIR__ . '/../views/user/display.php');
// }

// die;
}
include __DIR__ . '/../views/templates/header.php';
    include __DIR__ . '/../views/sub/sub-add.php';
include __DIR__ . '/../views/templates/footer.php';
