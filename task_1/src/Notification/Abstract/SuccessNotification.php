<?php

namespace Task1\Notification\Abstract;

class SuccessNotification extends NotificationAbstract
{
    /**
     * Render success notification header.
     *
     * @param string $url
     * @return void
     */
    public function renderHeader(string $url): void
    {
        echo "<Success IMG - $url />" . PHP_EOL;
    }

    /**
     * Render success notification content.
     *
     * @param string $text
     * @return void
     */
    public function renderContent(string $text): void
    {
        echo "<Success Text - $text />" . PHP_EOL;
    }

    /**
     * Render success notification footer.
     *
     * @param string $text
     * @return void
     */
    public function renderFooter(string $text): void
    {
        echo "<Success Button - $text />" . PHP_EOL;
    }
}
