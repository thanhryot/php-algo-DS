<?php declare(strict_types=1);

namespace ThanhRyot\DataStructures\LinkedList;

use ThanhRyot\Contracts\ILinkedList;
use ThanhRyot\Contracts\INode;
use UnderflowException;

class LinkedList implements ILinkedList
{
    private $head = null;

    public function insertAtHead(INode $node): void
    {
        if (!$this->isEmpty()) {
            $node->setNext($this->getHead());
        }
        $this->setHead($node);
    }

    public function insertAtEnd(INode $node): void
    {
        if (!$this->isEmpty()) {
            $currentNode = $this->getHead();
            while ($currentNode->getNext() !== null) {
                $currentNode = $currentNode->getNext();
            }
            $currentNode->setNext($node);
        } else {
            $this->setHead($node);
        }
    }

    public function insertBeforeSpecificNode(INode $node, INode $target): void
    {
        if (!$this->isEmpty()) {
            $currentNode = $this->getHead();
            $prevNode = null;
            while ($currentNode->getNext() !== null) {
                if ($currentNode->getData() == $node->getData()) {
                    if (is_null($prevNode)) {
                        $this->setHead($target);
                    } else {
                        $prevNode->setNext($target);
                    }
                    $target->setNext($currentNode);
                    return;
                }
                $prevNode = $currentNode;
                $currentNode = $currentNode->getNext();
            }
        }
        throw new UnderflowException("Linked list is null! First to all you need add node to it!");
    }

    public function delete(INode $node): void
    {
        if (!$this->isEmpty()) {
            $currentNode = $this->getHead();
            $prevNode = null;
            while ($currentNode->getNext() !== null) {
                if ($currentNode->getData() == $node->getData()) {
                    if (is_null($prevNode)) {
                        $this->setHead($currentNode->getNext());
                    } else {
                        $prevNode->setNext($currentNode->getNext());
                    }
                    unset($currentNode);
                    return;
                }
                $prevNode = $currentNode;
                $currentNode = $currentNode->getNext();
            }
            throw new UnderflowException("Linked list is null!");
        }
    }

    public function deleteAtHead(): void
    {
        if (!$this->isEmpty()) {
            $currentNode = $this->getHead();
            $nextNode = $currentNode->getNext();
            $this->setHead($nextNode);
            unset($currentNode);
            return;
        }
        throw new UnderflowException("Linked list is null!");
    }

    public function find(INode $node): bool
    {
        if (!$this->isEmpty()) {
            $currentNode = $this->getHead();
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
        return $this->getHead() ? false : true;
    }

    public function count(): int
    {
        if (!$this->isEmpty()) {
            $count = 1;
            $currentNode = $this->getHead();
            while ($currentNode->getNext() !== null) {
                $currentNode = $currentNode->getNext();
                $count++;
            }
            return $count;
        }
        return 0;
    }


    public function reverse(): void
    {
        if (!$this->isEmpty()) {
            $currentNode = $this->getHead();
            $prevNode = null;
            $nextNode = null;
            while ($currentNode !== null) {
                $nextNode = $currentNode->getNext();
                $currentNode->setNext($prevNode);
                $prevNode = $currentNode;
                $currentNode = $nextNode;
            }
            $this->setHead($prevNode);
        }
    }

    public function getHead(): ?INode
    {
        return $this->head;
    }

    public function setHead(?INode $node): void
    {
        $this->head = $node;
    }
}