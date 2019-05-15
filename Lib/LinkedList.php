<?php
namespace CrazyDwarf;

class LinkedList
{
    private $list=array();

    public function __construct(Node $n, ...$args)
    {
        array_push($this->list, $n);
    }

    public function __debugInfo()
    {
        return $this->list;
    }
    public function getFirst()
    {
        return $this->list[0];
    }
}
