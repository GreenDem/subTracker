<?php

require_once __DIR__ . '/../models/subscriptions.php';
require_once __DIR__ . '/../models/labels.php';


Users::checkUser();
$subscriptions = Subscriptions::get($_GET['id']);
$label = Labels::get($subscriptions->idLabel);

var_dump($label);


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/sub/users-sub-deleted.php';
include __DIR__ . '/../views/templates/footer.php';