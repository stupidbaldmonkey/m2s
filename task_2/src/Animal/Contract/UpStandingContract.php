<?php

namespace Task2\Animal\Contract;

interface UpStandingContract extends BasicPropertyContract
{
    /**
     * Run action.
     *
     * @return void
     */
    public function run(): void;
}