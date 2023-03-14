<?php

require_once __DIR__ . '/vendor/autoload.php';

use Task3\Order\Service;
use Task3\Order\Repository;

$app = new Task3\Application(
    new Service\OrderService(
        new Repository\OrderRepository()
    )
);

$app->run();