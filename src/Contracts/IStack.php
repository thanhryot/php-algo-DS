<?php declare(strict_types=1);

namespace ThanhRyot\Contracts;

interface IStack
{
    public function push(string $item): void;

    public function pop(): void;

    public function top(): string;

    public function isEmpty(): bool;
}