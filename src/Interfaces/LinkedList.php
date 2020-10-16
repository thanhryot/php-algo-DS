<?php declare(strict_types=1);

namespace ThanhRyot\Interfaces;

use Countable;

interface LinkedList extends Countable
{
    /**
     * Inserts a given element at the start/head of the linked list.
     *
     * @param Node $node
     * @return void
     */
    public function insertAtHead(Node $node): void;

    /**
     * Inserts a given element at the end of the linked list.
     *
     * @param Node $node
     * @return void
     */
    public function insertAtEnd(Node $node): void;

    /**
     * Inserts a given element before specific node.
     *
     * @param Node $node
     * @param Node $target target node
     * @return void
     */
    public function insertBeforeSpecificNode(Node $node, Node $target): void;

    /**
     * Deletes a given element from the linked list.
     *
     * @param Node $node
     * @return void
     */
    public function delete(Node $node): void;

    /**
     * Deletes the first element of the linked list.
     *
     * @return void
     */
    public function deleteAtHead(): void;

    /**
     * Finds if a node exists in the linked list.
     *
     * @param Node $node
     * @return bool
     */
    public function find(Node $node): bool;

    /**
     * Returns true if the linked list is empty.
     *
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * Reverse the linked list.
     *
     * @return void
     */
    public function reverse(): void;

}