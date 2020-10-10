<?php declare(strict_types=1);

namespace ThanhRyot\DataStructures;

use Countable;
use UnderflowException;
use ThanhRyot\Contracts\IQueue;

class Queue implements IQueue, Countable
{
    private array $queue;

    public function __construct(array $init)
    {
        $this->queue = $init;
    }

    public function enqueue(string $item): void
    {
        array_unshift($this->queue, $item);
    }

    public function dequeue(): void
    {
        if ($this->isEmpty()) {
            throw new UnderflowException("Queue is empty!");
        }
        array_pop($this->queue);
    }

    public function top(): string
    {
        if ($this->isEmpty()) {
            throw new UnderflowException("Queue is empty!");
        }
        return end($this->queue);
    }

    public function isEmpty(): bool
    {
        return empty($this->queue);
    }

    public function count(): int
    {
        return count($this->queue);
    }
}