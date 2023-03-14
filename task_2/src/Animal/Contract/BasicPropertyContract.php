<?php

namespace Task2\Animal\Contract;

interface BasicPropertyContract
{
    /**
     * Eat action.
     *
     * @return void
     */
    public function eat(): void;

    /**
     * Spawn action.
     *
     * @return void
     */
    public function spawn(): void;
}