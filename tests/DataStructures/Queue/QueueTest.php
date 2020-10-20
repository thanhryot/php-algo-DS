<?php declare(strict_types=1);

namespace Test\DataStructures;

use UnderflowException;
use PHPUnit\Framework\TestCase;
use ThanhRyot\DataStructures\Queue\Queue;

class QueueTest extends TestCase
{
    public function testCanPushAndPopStack()
    {
        $queue = new Queue();
        $queue->enqueue(1);
        $queue->enqueue(2);
        $queue->enqueue(3);
        $queue->dequeue();
        $this->assertCount(2, $queue);

    }

    public function testExceptionWhenPopEmptyStack()
    {
        $this->expectException(UnderflowException::class);
        $this->expectErrorMessage('Queue is empty!');
        $queue = new Queue();
        $queue->dequeue();
    }
}