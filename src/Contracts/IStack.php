<?php

namespace ThanhRyot\Contracts;

interface IStack
{
    public function push(string $item);

    public function pop();

    public function top();

    public function isEmpty();
}