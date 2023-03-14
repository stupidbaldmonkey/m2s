<?php

namespace Task3\Order\Service;

use Task3\Order\Contract\OrderServiceContract;
use Task3\Order\Contract\OrderRepositoryContract;

class OrderService implements OrderServiceContract
{
    public function __construct(private OrderRepositoryContract $repository)
    {
    }

    /**
     * Render order list.
     *
     * @return void
     */
    public function render(): void
    {
        $orderData = $this->repository->getAll();

        foreach ($orderData as $order) {
            echo str_repeat('-', 20) . PHP_EOL;
            echo "Title: {$order->getTitle()}" . PHP_EOL;
            echo "Cost: {$order->getCost()}" . PHP_EOL;
            echo str_repeat('-', 20) . PHP_EOL . PHP_EOL;
        }
    }
}