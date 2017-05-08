<?php

class BinHeap
{
    public $hipArray;
    public $currentSize;

    public function __construct()
    {
        $this->hipArray = [0];
        $this->currentSize = 0;
    }

    public function add($element)
    {
        array_push($this->hipArray, $element);
        $this->currentSize++;

        $this->percUp($this->currentSize);
    }

    private function percUp($index)
    {
        //echo implode(" ", $this->hipArray). "\n";

        if (count($this->hipArray) > 2) {
            $parentIndex = floor($index / 2);

            if ($parentIndex < 1) {
                return ;
            } elseif ($this->hipArray[$parentIndex] > $this->hipArray[$index]) {
                $this->swap($index, $parentIndex);
                $this->percUp($parentIndex);
            }
        }
    }

    private function bubbleUp($index)
    {
        $left = 2 * $index;
        $right = 2 * $index + 1;
        $largest = $index;

        if (count($this->hipArray) > $left && $this->hipArray[$largest] < $this->hipArray[$left]) {
            $largest = $left;
        }

        if (count($this->hipArray) > $right && $this->hipArray[$largest] < $this->hipArray[$right]) {
            $largest = $right;
        }

        if ($largest != $index) {
            $this->swap($index, $largest);
            $this->bubbleUp($largest);
        }
    }

    public function addItems(array $items)
    {
        foreach($items as $item) {
            $this->add($item);
        }
    }

    public function pop()
    {
        array_splice($this->hipArray, 1, 1);
        $this->swap(1, count($this->hipArray) - 1);
        //var_dump($this->hipArray);
        $this->bubbleUp(1);
    }

    private function swap($parentIndex, $currentIndex)
    {
        $temp = $this->hipArray[$parentIndex];
        $this->hipArray[$parentIndex] = $this->hipArray[$currentIndex];
        $this->hipArray[$currentIndex] = $temp;
    }
}

$object = new BinHeap();
$object->addItems([95, 3, 21, 2]);
$object->add(10);
$object->add(100);
$object->add(34);

echo implode(" ", $object->hipArray) ."\n";