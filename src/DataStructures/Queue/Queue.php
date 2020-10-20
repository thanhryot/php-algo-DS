<?php declare(strict_types=1);

namespace ThanhRyot\DataStructures\Queue;

use stdClass;
use UnderflowException;
use ThanhRyot\Interfaces\Queue as IQueue;

class Queue implements IQueue
{
    private int $count;
    private $items;

    public function __construct()
    {
        $this->clear();
    }

    public function enqueue($item): void
    {
        for ($i = $this->count - 1; $i >= 0; $i--) {
            $key = $i + 1;
            $this->items->{$key} = $this->items->{$i};
        }
        $this->items->{0} = $item;
        $this->count++;
    }

    public function dequeue(): void
    {
        if ($this->isEmpty()) {
            throw new UnderflowException("Queue is empty!");
        }
        $this->count--;
        unset($this->items->{$this->count});
    }

    public function peek()
    {
        if ($this->isEmpty()) {
            throw new UnderflowException("Queue is empty!");
        }
        return $this->items->{--$this->count};
    }

    public function count()
    {
        return $this->count;
    }

    public function isEmpty(): bool
    {
        return $this->count === 0;
    }

    public function clear(): void
    {
        $this->count = 0;
        $this->items = new stdClass();
    }

    public function toString(): ?string
    {
        if ($this->isEmpty()) {
            return null;
        }
        return json_encode($this->items);
    }
}