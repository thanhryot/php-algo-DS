<?php

namespace ThanhRyot\Contracts;

interface IQueue
{
    public function enqueue(string $item);

    public function dequeue();

    public function top();

    public function isEmpty();
}