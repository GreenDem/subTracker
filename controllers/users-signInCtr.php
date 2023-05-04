<?php

require_once __DIR__ . '/../config/init.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


$mail =  filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL);
if (empty($mail)) {
    $error['mail'] = 'Merci de rensigner votre Email';
    $errorBlock = 1;
} else {
    $mail =  filter_var($mail, FILTER_VALIDATE_EMAIL);
    if ($mail == false) {
        $error['mail'] = "Saisie incorrect";
        $errorBlock = 1;
    }
}


}

include __DIR__ . '/../views/templates/header.php';
    include __DIR__ . '/../views/users/form-SignIn.php';
include __DIR__ . '/../views/templates/footer.php';
