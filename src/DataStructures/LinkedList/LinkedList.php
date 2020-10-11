<?php declare(strict_types=1);

namespace ThanhRyot\DataStructures\LinkedList;

use ThanhRyot\Contracts\ILinkedList;
use ThanhRyot\Contracts\INode;

class LinkedList implements ILinkedList
{
    private $head;

    public function __construct()
    {
        $this->head;
    }

    public function insertAtHead(INode $node): void
    {
        if (!$this->isEmpty()) {
            $node->setNext($this->head);
        }
        $this->head = $node;
    }

    public function insertAtEnd(INode $node): void
    {
        if (!$this->isEmpty()) {
            $currentNode = $this->head;
            while ($currentNode->getNext() !== null) {
                $currentNode = $currentNode->getNext();
            }
            $currentNode->setNext($node);
        } else {
            $this->head = $node;
        }
    }

    public function insertBeforeSpecificNode(INode $node): void
    {

    }

    public function delete(INode $node): bool
    {
        if (!$this->isEmpty()) {
            $currentNode = $this->head;
            $prevNode = null;
            while ($currentNode->getNext() !== null) {
                if ($currentNode->getData() == $node->getData()) {
                    if (is_null($prevNode)) {
                        $this->head = $currentNode->getNext();
                    } else {
                        $prevNode->setNext($currentNode->getNext());
                    }
                    unset($currentNode);
                    return true;
                }
                $prevNode = $currentNode;
                $currentNode = $currentNode->getNext();
            }
            return false;
        }
    }


    public function deleteAtHead(): void
    {

    }


    public function find(INode $node): bool
    {
        if (!$this->isEmpty()) {
            $currentNode = $this->head;
            while ($currentNode->getNext() !== null) {

                if ($currentNode->getData() == $node->getData()) {
                    return true;
                }
                $currentNode = $currentNode->getNext();
            }
        }
        return false;
    }


    public function isEmpty(): bool
    {
        return $this->head ? false : true;
    }

    public function count(): int
    {
        if (!$this->isEmpty()) {
            $count = 1;
            $currentNode = $this->head;
            while ($currentNode->getNext() !== null) {
                $currentNode = $currentNode->getNext();
                $count++;
            }
            return $count;
        }
        return 0;
    }
}