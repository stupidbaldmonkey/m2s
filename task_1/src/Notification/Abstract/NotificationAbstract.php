<?php

namespace Task1\Notification\Abstract;

abstract class NotificationAbstract
{
    /**
     * Render notification header.
     *
     * @param string $url
     * @return void
     */
    abstract protected function renderHeader(string $url): void;

    /**
     * Render notification content.
     *
     * @param string $text
     * @return void
     */
    abstract protected  function renderContent(string $text): void;

    /**
     * Render notification footer.
     *
     * @param string $text
     * @return void
     */
    abstract protected  function renderFooter(string $text): void;

    /**
     * Render notification.
     *
     * @param $headerUrl
     * @param $contentText
     * @param $footerText
     * @return void
     */
    public function render($headerUrl, $contentText, $footerText): void
    {
        echo '........HEADER........' . PHP_EOL;
        $this->renderHeader($headerUrl);
        echo '......../HEADER........' . PHP_EOL;
        echo '........CONTENT........' . PHP_EOL;
        $this->renderContent($contentText);
        echo '......../CONTENT........' . PHP_EOL;
        echo '........FOOTER........' . PHP_EOL;
        $this->renderFooter($footerText);
        echo '......../FOOTER........' . PHP_EOL;
    }
}