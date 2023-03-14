<?php

namespace Task1\Notification\Factory;

use Exception;
use Task1\Notification\Abstract;
use Task1\Notification\DangerNotification;
use Task1\Notification\SuccessNotification;
use Task1\Notification\Contract\NotificationContract;

class NotificationFactory
{
    public const SUCCESS = 1;
    public const DANGER = 2;

    /**
     * Get notification by type using interface.
     *
     * @param int $type
     * @return NotificationContract
     * @throws Exception
     */
    public function getNotification(int $type): NotificationContract
    {
        return match ($type) {
            self::SUCCESS => new SuccessNotification(),
            self::DANGER => new DangerNotification(),
            default => throw new Exception('Notification type does not exists'),
        };
    }

    /**
     * Get notification by type using abstract class.
     *
     * @param int $type
     * @return Abstract\NotificationAbstract
     * @throws Exception
     */
    public function getNotificationFromAbstract(int $type): Abstract\NotificationAbstract
    {
        return match ($type) {
            self::SUCCESS => new Abstract\SuccessNotification(),
            self::DANGER => new Abstract\DangerNotification(),
            default => throw new Exception('Notification type does not exists'),
        };
    }
}