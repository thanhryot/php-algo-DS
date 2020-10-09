<?php

namespace ThanhRyot\DataStructures;

use Countable;
use UnderflowException;
use ThanhRyot\Contracts\IStack;

class Stack implements IStack, Countable
{
    private $stack = [];
    private $limit;

    public function __construct(array $init, int $limit = 5)
    {
        $this->stack = $init;
        $this->limit = $limit;
    }

    public function push(string $item)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            return "Stack is full!";
        }
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            throw new UnderflowException("Stack is empty!");
        }
        array_shift($this->stack);
    }

    public function top()
    {
        return current($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

    public function getElement()
    {
        return $this->stack;
    }

    public function count()
    {
        return count($this->stack);
    }
}