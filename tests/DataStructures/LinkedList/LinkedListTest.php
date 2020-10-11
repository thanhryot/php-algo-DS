<?php declare(strict_types=1);

namespace Test\DataStructures\LinkedList;

use PHPUnit\Framework\TestCase;
use ThanhRyot\DataStructures\LinkedList\LinkedList;
use ThanhRyot\DataStructures\LinkedList\Node;
use UnderflowException;

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
        $this->linkedList->delete($this->node2);
        $this->assertCount(2, $this->linkedList);
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
        $this->linkedList->deleteAtHead();
        $this->assertCount(2, $this->linkedList);
    }

    public function testExceptionWhenRemoveHeadNodeInNullLinkedList()
    {
        $this->expectException(UnderflowException::class);
        $this->expectExceptionMessage('Linked list is null!');
        $nullLinkedList = new LinkedList();
        $nullLinkedList->deleteAtHead();
    }

    public function testCanInsertBeforeSpecificNodeInLinkedList()
    {
        $node4 = new Node(4);
        $node5 = new Node(5);
        $this->linkedList->insertBeforeSpecificNode($this->node2, $node4);
        $this->linkedList->insertBeforeSpecificNode($this->node1, $node5);
        // 5 - 1 - 4 - 2 -3
        $this->assertSame($this->node1, $node5->getNext());
        $this->assertSame($this->node2, $node4->getNext());
    }
}