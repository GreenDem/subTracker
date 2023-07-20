<?php

$id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));

$isDeleted = Users::delete($id);

if ($isDeleted) {
    SessionFlash::setMessage('La Suppression a bien été effectuée');
    header('location: /../index.php?action=dash');
    die;
} else {
    SessionFlash::setMessage('Erreur lors de la suppression');
    header('location: /../index.php?action=dash');
}
