<?php

$id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));

$isDeleted =Users::delete($id);

if ($isDeleted) {
    SessionFlash::setMessage('La Supression a bien été effectuée');
    header('location: /../index.php?action=dash');
    die;
}else {
    SessionFlash::setMessage('Erreur lors de la supression');
    header('location: /../index.php?action=dash');
}