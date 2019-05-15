<?php
namespace CrazyDwarf;

use PHPUnit\Framework\TestCase;

class LinkedListTest extends TestCase
{
    public function testLinkedListPrint()
    {
        $n1 = new Node('node number 1', null, null);
        $ll = new LinkedList($n1);
        /*print_r($ll);*/
        $this->assertSame('node number 1', $ll->getFirst()->data);
    }
}
