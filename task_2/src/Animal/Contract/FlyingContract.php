<?php

namespace Task2\Animal\Contract;

interface FlyingContract extends BasicPropertyContract
{
    /**
     * Fly action.
     *
     * @return void
     */
    public function fly(): void;
}