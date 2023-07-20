<?php

require_once __DIR__ . '/../models/subscriptions.php';
require_once __DIR__ . '/../models/labels.php';

Users::checkUser();

$id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));

$subscriptions = Subscriptions::get($id);



include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/sub/users-sub-deleted.php';
include __DIR__ . '/../views/templates/footer.php';
