<?php declare(strict_types=1);

namespace Test\DataStructures;

use UnderflowException;
use PHPUnit\Framework\TestCase;
use ThanhRyot\DataStructures\Stack\Stack;

class StackTest extends TestCase
{
    public function testCanPushAndPopStack()
    {
        $stack = new Stack();
        $stack->push(1);
        $stack->push(2);
        $stack->push(3);
        $stack->pop();
        $this->assertCount(2, $stack);
    }

    public function testExceptionWhenPopEmptyStack()
    {
        $this->expectException(UnderflowException::class);
        $this->expectErrorMessage('Stack is empty!');
        $stack = new Stack();
        $stack->pop();
    }
}