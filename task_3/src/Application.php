<?php

namespace Task3;

use Task3\Order\Contract\OrderServiceContract;

class Application
{
    public function __construct(private OrderServiceContract $orderService)
    {
    }

    /**
     * Run application.
     *
     * @return void
     */
    public function run(): void
    {
        $this->orderService->render();
    }
}