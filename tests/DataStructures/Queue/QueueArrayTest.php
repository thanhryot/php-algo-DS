<?php declare(strict_types=1);

namespace Test\DataStructures;

use PHPUnit\Framework\TestCase;
use ThanhRyot\DataStructures\Queue\QueueArray;
use UnderflowException;

class QueueArrayTest extends TestCase
{
    private $initQueue = ["Alice", "Join", "Alex", "Chichi"];

    public function testCanEnqueueQueue()
    {
        $queue = new QueueArray($this->initQueue);
        $queue->enqueue("Thanh");
        $this->assertCount(5, $queue);
    }

    public function testCanDequeueQueue()
    {
        $queue = new QueueArray($this->initQueue);
        $queue->dequeue();
        $this->assertCount(3, $queue);
    }

    public function testExceptionWhenGotTopOfEmptyQueue()
    {
        $this->expectException(UnderflowException::class);
        $queue = new QueueArray([]);
        $queue->peek();
    }
}