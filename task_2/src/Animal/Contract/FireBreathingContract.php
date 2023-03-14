<?php

namespace Task2\Animal\Contract;

interface FireBreathingContract extends FlyingContract
{
    /**
     * Fight action.
     *
     * @return void
     */
    public function fight(): void;

    /**
     * Hunt action.
     *
     * @return void
     */
    public function hunt(): void;
}