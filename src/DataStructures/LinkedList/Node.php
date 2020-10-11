<?php

namespace ThanhRyot\DataStructures\LinkedList;

use ThanhRyot\Contracts\INode;

class Node implements INode
{
    private $data;
    private $next;

    public function __construct($data = null)
    {
        $this->data = $data;
        $this->next = null;
    }

    public function setData($data): void
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setNext($next): void
    {
        $this->next = $next;
    }

    public function getNext()
    {
        return $this->next;
    }
}