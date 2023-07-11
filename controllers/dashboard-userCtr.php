<?php
Users::checkUser();
Users::checkAdmin();


$bootCSS = '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
';
$bootJS = '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
';

// $id=4;
// $users = new Users;
// $users->setLastname('Nathan');
// $users->setFirstname('demory');
// $users->setMail('nathan.demory@gmail.com');
// $users->setPassword('mwarf');
// $test = $users->delete(31);
// var_dump($test);
$users = Users::getAll();


include __DIR__ . '/../views/templates/header.php';
    include __DIR__ . '/../views/admin/dashboard-users.php';
include __DIR__ . '/../views/templates/footer.php';