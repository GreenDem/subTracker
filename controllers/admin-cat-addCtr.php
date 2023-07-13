<?php
require_once __DIR__ .'/../models/Categories.php';
Users::checkUser();
Users::checkAdmin();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($category)) {
        $error['category'] = 'Le nom de la catégorie est obligatoire';
    }

    if (empty($error)){
        $categories = new Categories;
        $categories->setcategory($category);
        

        $isOk = $categories->add();

        if ($isOk) {
            SessionFlash::setMessage('La categorie a bien été enregistré');
            header('location: /../index.php?action=dashcat');
            die;
        }else {
            SessionFlash::setMessage('La création n\'a été effectuée');
            header('location: /../index.php?action=dashcat');
        }
    }
}


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/admin/admin-cat-add.php';
include __DIR__ . '/../views/templates/footer.php';
