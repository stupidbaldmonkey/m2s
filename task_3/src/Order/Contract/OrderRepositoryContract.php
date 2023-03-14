<?php

namespace Task3\Order\Contract;

interface OrderRepositoryContract
{
    public function getAll(): array;
}