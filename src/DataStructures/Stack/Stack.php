<?php declare(strict_types=1);

namespace ThanhRyot\DataStructures\Stack;

use stdClass;
use UnderflowException;
use ThanhRyot\Interfaces\Stack as IStack;

class Stack implements IStack
{
    private int $count;
    private $items;

    public function __construct()
    {
        $this->clear();
    }

    public function push($item): void
    {
        $this->items->{$this->count} = $item;
        $this->count++;
    }

    public function pop(): void
    {
        if ($this->isEmpty()) {
            throw new UnderflowException("Stack is empty!");
        }
        $this->count--;
        unset($this->items->{$this->count});
    }

    public function peek()
    {
        if ($this->isEmpty()) {
            throw new UnderflowException("Stack is empty!");
        }

        return $this->items->{$this->count - 1};
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

    public function count()
    {
        return $this->count;
    }

    public function toString(): ?string
    {
        if ($this->isEmpty()) {
            return null;
        }
        return json_encode($this->items);
    }
}