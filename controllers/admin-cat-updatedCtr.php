<?php
require_once __DIR__ .'/../models/Categories.php';
Users::checkUser();
Users::checkAdmin();

$catID = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));


$cat = Categories::get($catID);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($category)) {
        $error['category'] = 'Le prénom est obligatoire.';
    }

    if (empty($error)){
        $categories = new Categories;
        $categories->setcategory($category);
        

        $isOk = $categories->update($catID);

        if ($isOk) {
            SessionFlash::setMessage('La Modification a bien été enregistré');
            header('location: /../index.php?action=dashcat');
            die;
        }else {
            SessionFlash::setMessage('aucune modification n\'a été effectuée');
            header('location: /../index.php?action=dashcat');
        }
    }
}


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/admin/admin-cat-updated.php';
include __DIR__ . '/../views/templates/footer.php';
