<?php declare(strict_types=1);

namespace ThanhRyot\DataStructures\Queue;

use UnderflowException;
use ThanhRyot\Interfaces\Queue as IQueue;

class QueueArray implements IQueue
{
    private array $items;

    public function __construct(array $init)
    {
        $this->items = $init;
    }

    public function enqueue(string $item): void
    {
        array_unshift($this->items, $item);
    }

    public function dequeue(): void
    {
        if ($this->isEmpty()) {
            throw new UnderflowException("Queue is empty!");
        }
        array_pop($this->items);
    }

    public function peek(): string
    {
        if ($this->isEmpty()) {
            throw new UnderflowException("Queue is empty!");
        }
        return end($this->items);
    }

    public function isEmpty(): bool
    {
        return empty($this->items);
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function clear(): void
    {
        $this->items = [];
    }

    public function toString(): ?string
    {
        if ($this->isEmpty()) {
            return null;
        }

        $result = '';
        foreach ($this->items as $item) {
            $result .= $item;
        }
        return $result;
    }
}