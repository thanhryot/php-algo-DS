<?php declare(strict_types=1);

namespace Test\DataStructures;

use OverflowException;
use PHPUnit\Framework\TestCase;
use ThanhRyot\DataStructures\Stack;

class StackTest extends TestCase
{
    private $initStack = ["Alice", "Join", "Alex", "Chichi"];

    public function testCanPushStack()
    {
        $stack = new Stack($this->initStack);
        $stack->push("Thanh");
        $this->assertCount(5, $stack);
    }

    public function testCanNotPushStackWhenLimit()
    {
        $this->expectException(OverflowException::class);
        $stack = new Stack($this->initStack, 4);
        $stack->push("Thanh");
    }

    public function testCanPopStack()
    {
        $stack = new Stack($this->initStack);
        $stack->push("Thanh");
        $stack->pop();
        $this->assertSame($this->initStack, $stack->getElement());
    }
}