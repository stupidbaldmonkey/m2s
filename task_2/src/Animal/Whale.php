<?php

namespace Task2\Animal;

use Task2\Animal\Contract\SwimmingContract;

class Whale implements SwimmingContract
{
    /**
     * Eat action.
     *
     * @return void
     */
    public function eat(): void
    {
        print 'Whale - Eat!';
    }

    /**
     * Spawn action.
     *
     * @return void
     */
    public function spawn(): void
    {
        print 'Whale - Spawn!';
    }

    /**
     * Swim action.
     *
     * @return void
     */
    public function swim(): void
    {
        print 'Whale - Swim!';
    }
}