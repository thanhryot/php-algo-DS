<?php

namespace ThanhRyot\DataStructures\Queue;

use Countable;
use UnderflowException;

class Queue implements QueueInterface, Countable
{
    private $queue;

    public function __construct(array $init)
    {
        $this->queue = $init;
    }

    public function enqueue(string $item)
    {
        array_unshift($this->queue, $item);
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            throw new UnderflowException("Queue is empty!");
        }
        array_pop($this->queue);
    }

    public function top()
    {
        return end($this->queue);
    }

    public function isEmpty()
    {
        return empty($this->queue);
    }

    public function count()
    {
        return count($this->queue);
    }
}