<?php declare(strict_types=1);

namespace ThanhRyot\Contracts;

interface IStack
{
    /**
     * Add an item in stack.
     *
     * @param string $item
     *
     * @return void
     */
    public function push(string $item): void;

    /**
     * Remove an item in stack.
     *
     * @param string $item
     *
     * @return void
     */
    public function pop(): void;

    /**
     * Get a current item in stack.
     *
     * @param string $item
     *
     * @return string
     */
    public function top(): string;

    /**
     * Check stack is empty or not.
     *
     * @return bool
     */
    public function isEmpty(): bool;
}