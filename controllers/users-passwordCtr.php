<?php

Users::checkUser();
$user=Users::get($_SESSION['user']->idUser);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $password = $_POST['oldPassword'];
    $userHash = $user->password;
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

        if ($isOk === true) {
            SessionFlash::setMessage('Le mot de passe à bien été modifié');
            header('location: /index.php?action=profil');
            die;
        } else {
            $db->rollBack(); // Annulation de toutes les requêtes exécutées avant la levée de l'exception
            SessionFlash::setMessage('Echec lors de la mise à jour du mot de passe');
            header('location: /index.php?action=profil');
            die;        
        }


    }
}
include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/users/password.php';
include __DIR__ . '/../views/templates/footer.php';