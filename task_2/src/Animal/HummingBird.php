<?php

namespace Task2\Animal;

use Task2\Animal\Contract\FlyingContract;

class HummingBird implements FlyingContract
{
    /**
     * Eat action.
     *
     * @return void
     */
    public function eat(): void
    {
        print 'HummingBird - Eat!';
    }

    /**
     * Spawn action.
     *
     * @return void
     */
    public function spawn(): void
    {
        print 'HummingBird - Spawn!';
    }

    /**
     * Fly action.
     *
     * @return void
     */
    public function fly(): void
    {
        print 'HummingBird - Fly!';
    }
}