<?php declare(strict_types=1);

namespace ThanhRyot\Contracts;

use Countable;

interface ILinkedList extends Countable
{
    /**
     * Inserts a given element at the start/head of the linked list.
     *
     * @param INode $node
     *
     * @return void
     */
    public function insertAtHead(INode $node): void;

    /**
     * Inserts a given element at the end of the linked list.
     *
     * @param INode $node
     *
     * @return void
     */
    public function insertAtEnd(INode $node): void;

    /**
     * Inserts a given element before specific node.
     *
     * @param INode $node
     *
     * @return void
     */
    public function insertBeforeSpecificNode(INode $node): void;

    /**
     * Deletes a given element from the linked list
     *
     * @param INode $node
     *
     * @return void
     */
    public function delete(INode $node): bool;

    /**
     * Deletes the first element of the linked list
     *
     * @return bool
     */
    public function deleteAtHead(): bool;

    /**
     * Finds if a node exists in the linked list
     *
     * @param INode $node
     *
     * @return bool
     */
    public function find(INode $node): bool;

    /**
     * Returns true if the linked list is empty
     *
     * @return bool
     */
    public function isEmpty(): bool;


}