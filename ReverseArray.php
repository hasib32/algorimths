<?php

$array = [3, 2, 4, 5];

$end = count($array) - 1;
$start = 0;

while ( $start < $end) {
    $temp = $array[$start];

    $array[$start] = $array[$end];
    $array[$end] = $temp;

    $start++;
    $end--;
}

var_dump($array);