<?php declare(strict_types=1);

namespace ThanhRyot\Interfaces;

interface Node
{
    /**
     * Set data into the node.
     *
     * @param mixed $data
     * @return void
     */
    public function setData($data): void;

    /**
     * Get data from node.
     *
     * @return mixed
     */
    public function getData();

    /**
     * Set a next node.
     *
     * @param Node $next
     * @return void
     */
    public function setNext(?Node $next): void;

    /**
     * Get a next node from current node.
     *
     * @return Node
     */
    public function getNext(): ?Node;
}