<?php

namespace Task2\Animal;

use Task2\Animal\Contract\CrawlingContract;

class Turtle implements CrawlingContract
{
    /**
     * Eat action.
     *
     * @return void
     */
    public function eat(): void
    {
        print 'Turtle - Eat!';
    }

    /**
     * Spawn action.
     *
     * @return void
     */
    public function spawn(): void
    {
        print 'Turtle - Spawn!';
    }

    /**
     * Crawl action.
     *
     * @return void
     */
    public function crawl(): void
    {
        print 'Turtle - Crawl!';
    }
}