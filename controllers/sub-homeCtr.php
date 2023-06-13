<?php

require_once __DIR__ . '/../config/init.php';

$subscriptions = Subscriptions::getAll();

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/sub/sub-home.php';
include __DIR__ . '/../views/templates/footer.php';