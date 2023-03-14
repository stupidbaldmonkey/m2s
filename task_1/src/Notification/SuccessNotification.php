<?php

namespace Task1\Notification;

use Task1\Notification\Contract\NotificationContract;

class SuccessNotification implements NotificationContract
{
    /**
     * Render success notification.
     *
     * @param string $message
     * @return void
     */
    public function render(string $message): void
    {
        echo '<Success Notification>' . PHP_EOL;
        echo $message . PHP_EOL;
    }
}
