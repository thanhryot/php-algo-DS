<?php declare(strict_types=1);

namespace Test\DataStructures;

use OverflowException;
use PHPUnit\Framework\TestCase;
use ThanhRyot\DataStructures\Stack\Stack;
use ThanhRyot\DataStructures\Stack\StackArray;

class StackArrayTest extends TestCase
{
    private $initStack = ["Alice", "Join", "Alex", "Chichi"];

    public function testCanPushStackArray()
    {
        $stack = new StackArray($this->initStack);
        $stack->push("Thanh");
        $this->assertCount(5, $stack);
    }

    public function testCanNotPushStackArrayWhenLimit()
    {
        $this->expectException(OverflowException::class);
        $stack = new StackArray($this->initStack, 4);
        $stack->push("Thanh");
    }

    public function testCanPopStackArray()
    {
        $stack = new StackArray($this->initStack);
        $stack->push("Thanh");
        $stack->pop();
        $this->assertSame($this->initStack, $stack->toArray());
    }
}