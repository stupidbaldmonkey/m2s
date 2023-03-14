<?php

namespace Task1;

use Exception;
use Task1\Notification\Factory\NotificationFactory;

class Application
{
    public function __construct(private NotificationFactory $notificationFactory)
    {
    }

    /**
     * Run application.
     *
     * @return void
     * @throws Exception
     */
    public function run(): void
    {
        $this->notificationFactory->getNotification(NotificationFactory::SUCCESS)
            ->render('Your record has been saved.');
        $this->notificationFactory->getNotification(NotificationFactory::DANGER)
            ->render('Please, try again!');
        $this->notificationFactory->getNotificationFromAbstract(NotificationFactory::SUCCESS)
            ->render('https://test.com', 'Success text.', 'Footer text.');
        $this->notificationFactory->getNotificationFromAbstract(NotificationFactory::DANGER)
            ->render('https://example.com', 'Danger text.', 'Footer text');
    }
}