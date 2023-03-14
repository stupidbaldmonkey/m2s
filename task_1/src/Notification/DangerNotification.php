<?php

namespace Task1\Notification;

use Task1\Notification\Contract\NotificationContract;

class DangerNotification implements NotificationContract
{
    /**
     * Render danger notification.
     *
     * @param string $message
     * @return void
     */
    public function render(string $message): void
    {
        echo '<Danger Notification>' . PHP_EOL;
        echo $message . PHP_EOL;
    }
}
