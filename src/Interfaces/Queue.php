<?php declare(strict_types=1);

namespace ThanhRyot\Interfaces;

interface Queue
{
    /**
     * Add an item in queue.
     *
     * @param string $item
     * @return void
     */
    public function enqueue(string $item): void;

    /**
     * Remove an item in queue.
     *
     * @return void
     */
    public function dequeue(): void;

    /**
     * Get a current item in queue.
     *
     * @return string
     */
    public function top(): string;

    /**
     * Check queue is empty or not.
     *
     * @return bool
     */
    public function isEmpty(): bool;
}