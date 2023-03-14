<?php

namespace Task3\Order\Repository;

use Task3\Order\Dto\OrderDto;
use Task3\Order\Contract\OrderRepositoryContract;

class OrderRepository implements OrderRepositoryContract
{
    /**
     * Get all orders.
     *
     * @return OrderDto[]
     */
    public function getAll(): array
    {
        return [
            new OrderDto('Order #1', 100),
            new OrderDto('Order #2', 250),
            new OrderDto('Order #3', 300),
        ];
    }
}