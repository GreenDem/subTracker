<?php

// que du back et redirection 

if ($_SERVER['REQUEST_METHOD']== 'POST') {

// ==============================REQUIS=================================


// ========TITRE========
$subTitile = filter_input(INPUT_POST, 'subTitile', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
if (empty($subTitile)){
    $error['subTitile']= "Le champ ne peut pas être vide";
} else {
    if (strlen($subTitile) > 56){
        $error['subTitile']= "Le titre est trop long";
    }
}

// ==========CATEGORY=========
$category= $_POST['category'];
if (empty($category)){
    $error['category']= "Le champ ne peut pas être vide";
} else{
    if (in_array($category, CATEGORY)== false){
        $error['category'] = 'Une erreur est survenue';
    }
}

// =============RATE================

$category= $_POST['rate'];
if (empty($rate)){
    $error['rate']= "Champ Obligatoire";
} else{
    if (in_array($rate, RATE)== false){
        $error['rate'] = 'Une erreur est survenue';
    }
}

// ===============DUE DATE=================

$subDateDue = filter_input(INPUT_POST, 'subDateDue', FILTER_SANITIZE_NUMBER_INT);
if (!empty($subDateDue)) {
    $isOk = filter_var($subDateDue, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/' . $regex['date'] . '/']]);
    if (!$isOk) {
        $error["subDateDue"] = "La date entrée n'est pas valide!";
    }
} else {
    $error["subDateDue"] = "Champ Obligatoire";
}

// ===============TARIFF================
$tariff = filter_input(INPUT_POST, $tariff, FILTER_SANITIZE_NUMBER_INT);
if (empty($tariff)){
    $error['tariff']= "Le champ ne peut pas être vide";
}else {
    if ($tariff < 0) {
        $error['tariff']= "Le tarif ne peut pas être négatif";
    }
}




// ========================= NO REQUIRED ===============================


// =======================DATE DE DEBUT=======================
$subDateStart = filter_input(INPUT_POST, 'subDateStart', FILTER_SANITIZE_NUMBER_INT);
if (!empty($subDateStart)) {
    $isOk = filter_var($subDateStart, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/' . $regex['date'] . '/']]);
    if (!$isOk) {
        $error["subDateStart"] = "La date entrée n'est pas valide!";
    }
}

// ====================== DATE DE FIN ==============================
$subDateEnd = filter_input(INPUT_POST, 'subDateEnd', FILTER_SANITIZE_NUMBER_INT);
if (!empty($subDateEnd)) {
    $isOk = filter_var($subDateEnd, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/' . $regex['date'] . '/']]);
    if (!$isOk) {
        $error["subDateEnd"] = "La date entrée n'est pas valide!";
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
