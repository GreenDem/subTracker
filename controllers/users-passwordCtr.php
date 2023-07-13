<?php

Users::checkUser();
$user=Users::get($_SESSION['user']->idUser);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $password = $_POST['oldPassword'];
    $userHash = $user->password;
    var_dump($password);
        if (!password_verify($password, $userHash)) {
            $error['password'] = "Mauvais Mot de Passe";
        }


    $password = $_POST['password'];
    $password2 = $_POST['passwordCtr'];

    if ($password === $password2) {
        $password = password_hash($password, PASSWORD_DEFAULT);
    } else {
        $error['password'] = "Les mots de passes ne corresondent pas.";
    }

    if (empty($error)) {

        $user = new Users;
        $user->setPassword($password);

        $isOk = $user->updatePsw($_SESSION['user']->idUser);

    }
}
include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/users/password.php';
include __DIR__ . '/../views/templates/footer.php';