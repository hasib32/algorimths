<?php

/**
 * A Stack is an Abstract Data Type (ADT)
 * A real world stack allows one operations only
 * stack follow LIFO (last-in-first-out) pattern
 *
 * https://www.sitepoint.com/php-data-structures-1/
 */

class StackList
{
    protected $stack;
    protected $limit;

    public function __construct()
    {
        $this->stack = [];
        $this->limit = 10;
    }

    public function push($item)
    {
        if (count($this->stack) > $this->limit) {
            throw new RuntimeException('Stack is full');
        }
        // add item end of the array
        array_push($this->stack, $item);

        return $this->stack;
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            throw new RuntimeException('Stack is empty');
        }

        // Here is the main difference with Queue
        // Here we removing the last element
        array_pop($this->stack);

        return $this->stack;
    }

    public function top()
    {
        return current($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}
$object = new StackList();
$object->push('hasan hasibul');
$object->push(12);
var_dump($object->top());





