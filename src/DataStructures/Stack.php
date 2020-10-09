<?php declare(strict_types=1);

namespace ThanhRyot\DataStructures;

use Countable;
use OverflowException;
use UnderflowException;
use ThanhRyot\Contracts\IStack;

class Stack implements IStack, Countable
{
    private array $stack;
    private int $limit;

    public function __construct(array $init, int $limit = 5)
    {
        $this->stack = $init;
        $this->limit = $limit;
    }

    public function push(string $item): void
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            throw new OverflowException("Stack is full!");
        }
    }

    public function pop(): void
    {
        if ($this->isEmpty()) {
            throw new UnderflowException("Stack is empty!");
        }
        array_shift($this->stack);
    }

    public function top(): string
    {
        if ($this->isEmpty()) {
            throw new UnderflowException("Stack is empty!");
        }
        return current($this->stack);
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }

    public function getElement(): array
    {
        return $this->stack;
    }

    public function count(): int
    {
        return count($this->stack);
    }
}