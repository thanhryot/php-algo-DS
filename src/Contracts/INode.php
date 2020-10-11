<?php declare(strict_types=1);

namespace ThanhRyot\Contracts;

interface INode
{
    public function setData($data): void;

    public function getData();

    public function setNext($next): void;

    public function getNext();
}