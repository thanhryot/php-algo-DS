<?php declare(strict_types=1);

namespace ThanhRyot\Contracts;

interface IQueue
{
    public function enqueue(string $item): void;

    public function dequeue(): void;

    public function top(): string;

    public function isEmpty(): bool;
}