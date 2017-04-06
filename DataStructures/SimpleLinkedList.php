<?php

/**
 * Class Node
 * https://code.tutsplus.com/articles/data-structures-with-javascript-singly-linked-list-and-doubly-linked-list--cms-23392
 */
class Node {

    private $_data;
    public $next;

    public function __construct($data) {
        $this->_data = $data;
    }

    public function get_data() {
        return $this->_data;
    }

}

class LinkedList {

    private $_head;
    private $_tail;

    public function __construct($head=null) {
        $this->_head = $head;
    }

    public function add(Node $item) {
        if (!$this->_head) {
            $this->_head = $item;
            $this->_tail = $item;
        } else {
            $this->_tail->next = $item;
            $this->_tail = $item;
        }
    }

    public function print_all() {
        $node = $this->_head;
        while ($node != null) {
            echo $node->get_data() . "\n";
            $node = $node->next;
        }
    }

}

$list = new LinkedList;

$list->add(new Node(3));
$list->add(new Node(4));
$list->add(new Node(5));
$list->add(new Node(6));
$list->add(new Node(7));

$list->print_all();