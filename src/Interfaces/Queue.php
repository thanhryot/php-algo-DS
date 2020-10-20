<?php declare(strict_types=1);

namespace ThanhRyot\Interfaces;

use Countable;

interface Queue extends Countable
{
    /**
     * Add an item in queue.
     *
     * @param mixed $item
     * @return void
     */
    public function enqueue($item): void;

    /**
     * Remove an item in queue.
     *
     * @return void
     */
    public function dequeue(): void;

    /**
     * Get a current item in queue.
     *
     * @return mixed
     */
    public function peek();

    /**
     * Check queue is empty or not.
     *
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * Reset the queue.
     *
     * @return void
     */
    public function clear(): void;

    /**
     * Convert the queue to string.
     *
     * @return null|string
     */
    public function toString(): ?string;
}