<?php

namespace ThanhRyot\DataStructures\Queue;

interface QueueInterface
{
    public function enqueue(string $item);

    public function dequeue();

    public function top();

    public function isEmpty();
}