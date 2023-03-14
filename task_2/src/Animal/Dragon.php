<?php

namespace Task2\Animal;

use Task2\Animal\Contract\FireBreathingContract;

class Dragon implements FireBreathingContract
{
    /**
     * Eat action.
     *
     * @return void
     */
    public function eat(): void
    {
        print 'Dragon - Eat!';
    }

    /**
     * Spawn action.
     *
     * @return void
     */
    public function spawn(): void
    {
        print 'Dragon - Spawn!';
    }

    /**
     * Fight action.
     *
     * @return void
     */
    public function fight(): void
    {
        print 'Dragon - Fight!';
    }

    /**
     * Hunt action.
     *
     * @return void
     */
    public function hunt(): void
    {
        print 'Dragon - Hunt!';
    }

    /**
     * Fly action.
     *
     * @return void
     */
    public function fly(): void
    {
        print 'Dragon - Fly!';
    }
}