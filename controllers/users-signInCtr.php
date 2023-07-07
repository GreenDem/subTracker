<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $mail =  filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL);
    if (empty($mail)) {
        $error['mail'] = 'Merci de rensigner votre Email';
    } else {
        $mail =  filter_var($mail, FILTER_VALIDATE_EMAIL);
        if ($mail == false) {
            $error['mail'] = "Saisie incorrect";
        }
    }
    $cookie= filter_input(INPUT_POST, 'cookie', FILTER_SANITIZE_NUMBER_INT);
    $user = Users::isMailExists($mail);


    $password = $_POST['password'];
    if ($user != false) {
        if (!password_verify($password, $user->password)) {
            $error['password'] = "Mauvais Mot de Passe";
        }
    } else {
        $error['mail'] = 'L\'utilisateur n\'existe pas';
    }
    if (empty($error)) {
        $_SESSION['user'] = $user;
        if ($cookie == 1){
            $JWT = JWT::set($user->idUser, $user->mail, $user->admin);
            setcookie('user', $JWT, time() + (86400 * 30), '/');
        }
        header('location: /../index.php?action=subHome');
        die;
    }
}
include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/users/form-SignIn.php';
include __DIR__ . '/../views/templates/footer.php';
