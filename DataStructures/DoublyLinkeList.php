<?php

/**
 * http://www.codediesel.com/php/linked-list-in-php/
 *
 * Class ListNode
 */
class ListNode
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }

    public function readNode()
    {
        return $this->data;
    }
}

class LinkList
{
    private $firstNode;
    private $lastNode;
    private $count;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return is_null($this->firstNode);
    }

    /**
     * @param $data
     */
    public function insertFirst($data)
    {
        $link = new ListNode($data);
        // need to pointer to the next node
        $link->next = $this->firstNode;
        // set first node
        $this->firstNode = &$link;

        /**
         * if this is the first node inserted in the list
         * then set the last node pointer to it
         */
        if (is_null($this->lastNode)) {
            $this->lastNode = &$link;
        }

        $this->count++;
    }

    public function insertLast($data)
    {

        if (is_null($this->firstNode)) {
            $this->insertFirst();
        } else {
            $link = new ListNode($data);
            $this->lastNode->next = $link;
            $link->next = null;
            $this->lastNode = $link;
            $this->count++;
        }
    }

    public function totalNodes()
    {
        return $this->count;
    }

    public function find($key)
    {
        $current = $this->firstNode;

        while($current->data != $key) {
            if ($current->next == null) {
                return null;
            } else {
                $current = $current->next;
            }
        }

        return $current;
    }
}

$object = new LinkList();
$object->insertFirst(4);
$object->insertFirst(5);
var_dump($object->find(5));
//var_dump($object->totalNodes());
