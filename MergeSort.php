<?php
/**
 * Merge sort is a sorting technique based on divide and conquer technique.
 * With worst-case time complexity being Ο(n log n), it is one of the most respected algorithms.
 *
 * Merge sort first divides the array into equal halves and then
 * combines them in a sorted manner.
 * https://www.tutorialspoint.com/data_structures_algorithms/merge_sort_algorithm.htm
 * http://www.stoimen.com/blog/2010/07/02/friday-algorithms-javascript-merge-sort/
 */
$array = [23, 5, 21, 6, 34, 43, 1];

function mergeSort($array) {
    // if array has only one element we don't need to do anything
    if (count($array) < 2 ) {
        return $array;
    }

    $middlePoint = floor(count($array) / 2);

    $leftSideOfArray = mergeSort(array_slice($array, 0, $middlePoint));
    $rightSideOfArray = mergeSort(array_slice($array, $middlePoint, count($array)));

    return merge($leftSideOfArray, $rightSideOfArray);
}

function merge($leftSideOfArray, $rightSideOfArray) {
    $result = [];

    while (count($leftSideOfArray) && count($rightSideOfArray)) {

        if ($leftSideOfArray[0] > $rightSideOfArray[0]) {
            array_push($result, array_shift($rightSideOfArray));
        } else {
            array_push($result, array_shift($leftSideOfArray));
        }
    }

    while (count($leftSideOfArray)) {
        array_push($result, array_shift($leftSideOfArray));
    }

    while (count($rightSideOfArray)) {
        array_push($result, array_shift($rightSideOfArray));
    }

    return $result;
}

$sorted = mergeSort($array);
var_dump($sorted);
