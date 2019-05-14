<?php
namespace CrazyDwarf;

class Node
{
    public $next;
    public $prev;
    public $data;

    public function __construct($d, Node $p = null, Node $n = null)
    {
        $this -> data = $d;
        $this -> prev = $p;
        $this -> next = $n;
    }

    public function __debugInfo()
    {
        return [
        'prev' => $this->prev,
        'data' => $this->data,
        'next' => $this->next
      ];
    }

    public function whoAmI()
    {
        return Node::class;
    }

    public function get()
    {
        return $this -> data;
    }

    public function set($d)
    {
        $this -> data = $d;
    }

    public function setPrev(Node $p)
    {
        $this -> prev = $p;
    }

    public function setNext(Node $n)
    {
        $this -> next = $n;
    }

    public function getPrev()
    {
        return $this -> prev;
    }

    public function getNext()
    {
        return $this -> next;
    }
}
