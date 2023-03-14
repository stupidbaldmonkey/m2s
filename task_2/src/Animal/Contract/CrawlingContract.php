<?php

namespace Task2\Animal\Contract;

interface CrawlingContract extends BasicPropertyContract
{
    /**
     * Crawl action.
     *
     * @return void
     */
    public function crawl(): void;
}