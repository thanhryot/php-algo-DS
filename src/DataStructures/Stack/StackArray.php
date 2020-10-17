<?php declare(strict_types=1);

namespace ThanhRyot\DataStructures\Stack;

use OverflowException;
use UnderflowException;
use ThanhRyot\Interfaces\Stack as IStack;

class StackArray implements IStack
{
    private array $items;
    private int $limit;

    public function __construct(array $init, int $limit = 5)
    {
        $this->items = $init;
        $this->limit = $limit;
    }

    public function push($item): void
    {
        if (count($this->items) < $this->limit) {
            array_unshift($this->items, $item);
        } else {
            throw new OverflowException("Stack is full!");
        }
    }

    public function pop(): void
    {
        if ($this->isEmpty()) {
            throw new UnderflowException("Stack is empty!");
        }
        array_shift($this->items);
    }

    public function peek(): string
    {
        if ($this->isEmpty()) {
            throw new UnderflowException("Stack is empty!");
        }
        return current($this->items);
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

    public function toArray(): array
    {
        return $this->items;
    }
}