<?php declare(strict_types=1);

namespace ThanhRyot\DataStructures\LinkedList;

use ThanhRyot\Interfaces\LinkedList as ILinkedList;
use ThanhRyot\Interfaces\Node as INode;
use UnderflowException;

class LinkedList implements ILinkedList
{
    private ?INode $head = null;

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
            $current = $this->getHead();
            while ($current->getNext() !== null) {
                $current = $current->getNext();
            }
            $current->setNext($node);
        } else {
            $this->setHead($node);
        }
    }

    public function insertBeforeSpecificNode(INode $node, INode $target): void
    {
        if (!$this->isEmpty()) {
            $current = $this->getHead();
            $prev = null;
            while ($current->getNext() !== null) {
                if ($current->getData() == $node->getData()) {
                    if (is_null($prev)) {
                        $this->setHead($target);
                    } else {
                        $prev->setNext($target);
                    }
                    $target->setNext($current);
                    return;
                }
                $prev = $current;
                $current = $current->getNext();
            }
        }
        throw new UnderflowException("Linked list is null! First to all you need add node to it!");
    }

    public function delete(INode $node): void
    {
        if (!$this->isEmpty()) {
            $current = $this->getHead();
            $prev = null;
            while ($current->getNext() !== null) {
                if ($current->getData() == $node->getData()) {
                    if (is_null($prev)) {
                        $this->setHead($current->getNext());
                    } else {
                        $prev->setNext($current->getNext());
                    }
                    unset($current);
                    return;
                }
                $prev = $current;
                $current = $current->getNext();
            }
            throw new UnderflowException("Linked list is null!");
        }
    }

    public function deleteAtHead(): void
    {
        if (!$this->isEmpty()) {
            $current = $this->getHead();
            $next = $current->getNext();
            $this->setHead($next);
            unset($current);
            return;
        }
        throw new UnderflowException("Linked list is null!");
    }

    public function find(INode $node): bool
    {
        if (!$this->isEmpty()) {
            $current = $this->getHead();
            while ($current->getNext() !== null) {

                if ($current->getData() == $node->getData()) {
                    return true;
                }
                $current = $current->getNext();
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
            $current = $this->getHead();
            while ($current->getNext() !== null) {
                $current = $current->getNext();
                $count++;
            }
            return $count;
        }
        return 0;
    }


    public function reverse(): void
    {
        if (!$this->isEmpty()) {
            $current = $this->getHead();
            $prev = null;
            $next = null;
            while ($current !== null) {
                $next = $current->getNext();
                $current->setNext($prev);
                $prev = $current;
                $current = $next;
            }
            $this->setHead($prev);
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