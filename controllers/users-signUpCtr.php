<?php
SessionFlash::start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $mail =  filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL);
    if (empty($mail)) {
        $error['mail'] = 'Le mail est obligatoire';
    } else {
        $mail =  filter_var($mail, FILTER_VALIDATE_EMAIL);
        if ($mail == false) {
            $error['mail'] = "Format de mail non accepté";
        }
    }

    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($firstname)) {
        $error['firstname'] = 'Le prénom est obligatoire.';
    }


    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($lastname)) {
        $error['lastname'] = 'Le nom est obligatoire.';
    } else {
        // if (!preg_match("/" . $regex['lastname'] . "/", $lastname)) {
        //     $error['lastname'] = "Il y a une erreur dans votre nom";
        // }
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
        $user->setLastname($lastname);
        $user->setFirstname($firstname);
        $user->setMail($mail);
        $user->setPassword($password);

        $isOk = $user->add();

        if ($isOk) {
            $user=Users::getByMail($mail);
            $_SESSION['user']= $user;
            SessionFlash::setMessage('Votre compte a bien été crée.');
            header('location: /../index.php?action=subHome');
            die;
        }
    }
}


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/users/form-SignUp.php';
include __DIR__ . '/../views/templates/footer.php';
