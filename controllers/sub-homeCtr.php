<?php

require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/../models/Subscriptions.php';


$subscriptions = Subscriptions::getyAll();

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/sub/sub-home.php';
include __DIR__ . '/../views/templates/footer.php';