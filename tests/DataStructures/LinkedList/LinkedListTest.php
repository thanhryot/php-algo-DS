<?php declare(strict_types=1);

namespace Test\DataStructures\LinkedList;

use PHPUnit\Framework\TestCase;
use ThanhRyot\DataStructures\LinkedList\LinkedList;
use ThanhRyot\DataStructures\LinkedList\Node;

class LinkedListTest extends TestCase
{
    private $linkedList;
    private $node1;
    private $node2;
    private $node3;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->linkedList = new LinkedList();
        $this->node1 = new Node(1);
        $this->node2 = new Node(2);
        $this->node3 = new Node(3);
        $this->linkedList->insertAtHead($this->node3);
        $this->linkedList->insertAtHead($this->node2);
        $this->linkedList->insertAtHead($this->node1);
    }

    public function testCanAddNodeInHeadLinkedList()
    {
        $this->assertSame($this->node2, $this->node1->getNext());
    }

    public function testCanDeleteNodeInLinkedList()
    {
        $result = $this->linkedList->delete($this->node2);
        $this->assertTrue($result);
    }

    public function testCountNodeInLinkedList()
    {
        $this->assertCount(3, $this->linkedList);
    }

    public function testFindNodeInLinkedList()
    {
        $result = $this->linkedList->find(new Node(2));
        $this->assertTrue($result);
    }

    public function testNotFindNodeInLinkedList()
    {
        $result = $this->linkedList->find(new Node(4));
        $this->assertFalse($result);
    }

    public function testCanRemoveHeadNodeInLinkedList()
    {
        $result = $this->linkedList->deleteAtHead();
        $this->assertTrue($result);
    }
}