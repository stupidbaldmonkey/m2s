<?php

namespace Task2\Animal\Contract;

interface SwimmingContract extends BasicPropertyContract
{
    /**
     * Swim action.
     *
     * @return void
     */
    public function swim(): void;
}