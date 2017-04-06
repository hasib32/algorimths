<?php
/**
 * Selection sort is a simple sorting algorithm.
 * This sorting algorithm is an in-place comparison-based algorithm in which
 * the list is divided into two parts, the sorted part at the left
 * end and the unsorted part at the right end. Initially, the sorted
 * part is empty and the unsorted part is the entire list.
 *
 * The smallest element is selected from the unsorted array and swapped
 * with the leftmost element, and that element becomes a part of the sorted array.
 * This process continues moving unsorted array boundary by one element to the right.
 */
$unsortedArray = [-17,3,5,7,21,1,2,8,-1,5,51,5,2,3];

for($i = 0; $i < count($unsortedArray);) {

    $min = $unsortedArray[$i];
    $minIndexFoundAt = $i;

    for($j = $i; $j < count($unsortedArray);) {
        if (isset($unsortedArray[$j+1]) ) {
            //find the minimum number
            if($min > $unsortedArray[$j+1]) {
                // update minimum number
                $min = $unsortedArray[$j+1];
                $minIndexFoundAt = $j+1;//minimum number index
            }
        }
        $j++;
    }
    //swapping happening here
    $temp = $unsortedArray[$i];
    $unsortedArray[$i] = $min;
    // swapping with minimum number
    $unsortedArray[$minIndexFoundAt] = $temp;

    $i++;
}

print_r($unsortedArray);