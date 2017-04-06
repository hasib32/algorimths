<?php

/**
 * Queue is an Abstract data structure. somewhat similar to stack
 * But Queue follow FIFO (first-in-first-out) pattern
 *
 * https://www.sitepoint.com/php-data-structures-1/
 */

class QueueList
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
        // Here is the main difference with Stack
        // Here we removing the first element
        array_shift($this->stack);

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