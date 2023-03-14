<?php

namespace Task1\Notification\Abstract;

class DangerNotification extends NotificationAbstract
{
    /**
     * Render danger notification header.
     *
     * @param string $url
     * @return void
     */
    public function renderHeader(string $url): void
    {
        echo "<Danger IMG - $url />" . PHP_EOL;
    }

    /**
     * Render danger notification content.
     *
     * @param string $text
     * @return void
     */
    public function renderContent(string $text): void
    {
        echo "<Danger Text - $text />" . PHP_EOL;
    }

    /**
     * Render danger notification footer.
     *
     * @param string $text
     * @return void
     */
    public function renderFooter(string $text): void
    {
        echo "<Danger Button - $text />" . PHP_EOL;
    }
}
