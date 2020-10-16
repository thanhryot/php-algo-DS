<?php declare(strict_types=1);

namespace ThanhRyot\Interfaces;

use Countable;

interface Stack extends Countable
{
    /**
     * Add an item in stack.
     *
     * @param string $item
     * @return void
     */
    public function push(string $item): void;

    /**
     * Remove an item in stack.
     *
     * @param string $item
     * @return void
     */
    public function pop(): void;

    /**
     * Get a current item in stack.
     *
     * @param string $item
     * @return string
     */
    public function peek(): string;

    /**
     * Check stack is empty or not.
     *
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * Reset the stack.
     *
     * @return void
     */
    public function clear(): void;

    /**
     * Convert the stack to string.
     *
     * @return string|null
     */
    public function toString(): ?string;
}