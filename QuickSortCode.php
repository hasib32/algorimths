<?php
function partition($array, $start, $end)
{
    $pivot = $array[$end];
    $parttionIndex = $start; // set partition index as start initially

    for($i = $start; $i <= $end; $i++) {
        if ($array[$i] <= $pivot) {
            // swap if element is lesser than pivot
            $temp = $array[$i];
            $array[$parttionIndex] = $array[$i];
            $array[$i] = $temp;

            $parttionIndex ++;
        }
    }

    $temp1 = $array[$parttionIndex];
    $array[$parttionIndex] = $array[$end];
    $array[$end] = $temp1; // swap pivot with element at patition index

    return $parttionIndex;
}

function quickSort($array, $start, $end)
{
    if ($start < $end) {
        $partionIndex = partition($array, $start, $end);

        quickSort($array, $start, $partionIndex - 1);
        quickSort($array, $partionIndex + 1, $end);
    }

    return $array;
}

$array = [7, 2, 1, 6, 8, 5, 3, 4];

quickSort($array, 0, count($array) - 1);

var_dump($array);