<?php

namespace Task2;

use Task2\Animal\Dragon;
use Task2\Animal\Elephant;
use Task2\Animal\HummingBird;
use Task2\Animal\Turtle;
use Task2\Animal\Whale;

class Application
{
    /**
     * Run application.
     *
     * @return void
     */
    public function run(): void
    {
        $elephant = new Elephant();
        $elephant->eat();
        echo PHP_EOL;

        $dragon = new Dragon();
        $dragon->fight();
        echo PHP_EOL;

        $hummingBird = new HummingBird();
        $hummingBird->fly();
        echo PHP_EOL;

        $turtle = new Turtle();
        $turtle->crawl();
        echo PHP_EOL;

        $whale = new Whale();
        $whale->swim();
    }
}