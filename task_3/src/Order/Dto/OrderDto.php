<?php

namespace Task3\Order\Dto;

class OrderDto
{
    public function __construct(
        private string $title,
        private int $cost
    ) {
    }

    /**
     * Get order title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Get order cost.
     *
     * @return int
     */
    public function getCost(): int
    {
        return $this->cost;
    }
}