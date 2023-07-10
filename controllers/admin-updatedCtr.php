<?php 
Users::checkUser();
Users::checkAdmin();

$userID = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));

$user = Users::get($userID);

var_dump($user);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {



    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($firstname)) {
        $error['firstname'] = 'Le prénom est obligatoire.';
    }


    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($lastname)) {
        $error['lastname'] = 'Le nom est obligatoire.';
    } else {
        if (!preg_match("/" . LASTNAME . "/", $lastname)) {
            $error['lastname'] = "Il y a une erreur dans votre nom";
        }
    }

    $admin= filter_input(INPUT_POST, 'admin', FILTER_SANITIZE_NUMBER_INT);


    if (empty($error)) {

        $user = new Users;
        $user->setLastname($lastname);
        $user->setFirstname($firstname);
        $user->setAdmin($admin);

        $isOk = $user->updateAdmin($userID);

        if ($isOk) {
            SessionFlash::setMessage('La Modification a bien été enregistré');
            header('location: /../index.php?action=dash');
            die;
        }else {
            SessionFlash::setMessage('aucune modification n\'a été effectuée');
            header('location: /../index.php?action=dash');
        }
    }
}




include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/admin/admin-updated.php';
include __DIR__ . '/../views/templates/footer.php';

