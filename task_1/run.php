<?php

require_once __DIR__ . '/vendor/autoload.php';

use Task1\Notification\Factory;

try {
    $app = new Task1\Application(
        new Factory\NotificationFactory()
    );

    $app->run();
} catch (Exception $e) {
    echo $e->getMessage();
}