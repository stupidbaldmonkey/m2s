<?php

namespace Task2\Animal;

use Task2\Animal\Contract\UpStandingContract;

class Elephant implements UpStandingContract
{
    /**
     * Eat action.
     *
     * @return void
     */
    public function eat(): void
    {
        print 'Elephant - Eat!';
    }

    /**
     * Spawn action.
     *
     * @return void
     */
    public function spawn(): void
    {
        print 'Elephant - Spawn!';
    }

    /**
     * Run action.
     *
     * @return void
     */
    public function run(): void
    {
        print 'Elephant - Run!';
    }
}