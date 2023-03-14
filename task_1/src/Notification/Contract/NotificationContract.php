<?php

namespace Task1\Notification\Contract;

interface NotificationContract
{
    public function render(string $message): void;
}