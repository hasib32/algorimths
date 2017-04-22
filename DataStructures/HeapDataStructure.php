<?php

function heapify(&$array, $i) {

    $left = 2 * $i + 1;
    $right = 2 * $i + 2;

    if ($left < count($array) && $array[$left] > $array[$i]) {
        $largest = $left;
    } else {
        $largest = $i;
    }

    if ($right < count($array) && $array[$right] < $array[$largest]) {
        $largest = $right;
    }

    echo $largest. "\n";

    if ($largest != $i) {

        $temp = $array[$i];

        $array[$i] = $array[$largest];
        $array[$largest] = $temp;


        return heapify($array, $largest);
    }
}

function heapsort($array, $n)
{
    for ($i = $n / 2 -1; $i >= 0; $i--) {
        heapify($array, $i);
    }

    for($i = $n - 1; $i >= 0; $i--) {
        $temp = $array[0];

        $array[$i] = $array[0];
        $array[0] = $temp;
    }
}

$array = [17,11,10,5,8,25,13];

heapify($array, 0);

var_dump($array);