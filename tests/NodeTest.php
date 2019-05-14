<?php
namespace CrazyDwarf;

use PHPUnit\Framework\TestCase;

class NodeTest extends TestCase
{
    public function testCreateNode()
    {
        $node1 = new CrazyDwarf\Node('test1', null, null);
        print_r($node1);
        $this->assertSame($node1->data, 'test1');
        $this->assertSame($node1->prev, null);
        $this->assertSame($node1->next, null);
    }
}
