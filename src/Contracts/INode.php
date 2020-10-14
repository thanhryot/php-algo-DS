<?php declare(strict_types=1);

namespace ThanhRyot\Contracts;

interface INode
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
     * @param INode $next
     * @return void
     */
    public function setNext(?INode $next): void;

    /**
     * Get a next node from current node.
     *
     * @return INode
     */
    public function getNext(): ?INode;
}