<?php

/**
 * Quicksort is a divide and conquer algorithm. Quicksort first
 * divides a large array into two smaller sub-arrays:
 * the low elements and the high elements. Quicksort
 * can then recursively sort the sub-arrays.
 *
 * The steps are:
 * Pick an element, called a pivot, from the array.
 * Partitioning: reorder the array so that all elements with values less than the pivot come before the pivot
 * while all elements with values greater than the pivot come after it (equal values can go either way).
 * After this partitioning, the pivot is in its final position. This is called the partition operation.
 * Recursively apply the above steps to the sub-array of elements with smaller values and separately
 * to the sub-array of elements with greater values.
 *


/**
 * @param $arr
 * @param $leftIndex
 * @param $rightIndex
 * @return mixed
 */
function partition(&$arr,$leftIndex,$rightIndex)
{
    $pivotIndex = floor(($leftIndex+$rightIndex)/2);
    $pivot= $arr[$pivotIndex];

    while ($leftIndex <= $rightIndex)
    {
        while ($arr[$leftIndex] < $pivot)
            $leftIndex++;

        while ($arr[$rightIndex] > $pivot)
            $rightIndex--;

        if ($leftIndex <= $rightIndex) {

            $tmp = $arr[$leftIndex];
            $arr[$leftIndex] = $arr[$rightIndex];
            $arr[$rightIndex] = $tmp;

            $leftIndex++;
            $rightIndex--;
        }
    }
    return $leftIndex;
}

/**
 * @param $arr
 * @param $leftIndex
 * @param $rightIndex
 * @return array
 */
function quickSort(&$arr, $leftIndex, $rightIndex)
{
    if (count($arr) < 2) {
        return $arr;
    }

    $index = partition($arr, $leftIndex, $rightIndex);

    if ($leftIndex < $index - 1) {
        quickSort($arr, $leftIndex, $index - 1);
    }

    if ($index < $rightIndex) {
        quickSort($arr, $index, $rightIndex);
    }

    return $arr;
}
$nums = array(5,3,8,6,2,7, 1);

quickSort($nums,0,count($nums)-1);
echo implode(",",$nums)." @sorted\n";