<?php
require_once __DIR__ . '/../models/Users.php';
SessionFlash::start();


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            /*************************** MAIL **************************/
        //**** NETTOYAGE ****/
        $mail = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    
        //**** VERIFICATION ****/
        if (empty($mail)) {
            $errors['email'] = 'Le champ est obligatoire';
        } else {
            $isOk = filter_var($mail, FILTER_VALIDATE_EMAIL);
            if (!$isOk) {
                $errors['email'] = 'Le mail n\'est pas valide';
            }
            if (Users::isMailExists($mail)) {
                
                $password = $_POST['password'];


            }
        }
        /***********************************************************/


}