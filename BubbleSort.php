<?php

/**
 * Bubble sort, sometimes referred to as sinking sort, is a simple sorting algorithm
 * that repeatedly steps through the list to be sorted, compares each pair of adjacent
 * items and swaps them if they are in the wrong order. The pass through the list is
 * repeated until no swaps are needed, which indicates that the list is sorted
 *
 * https://en.wikipedia.org/wiki/Bubble_sort
 */

$unsortedArray = [120, 10, 3, 1, -12];

do {
    $swap = false;

    for ($i = 0; $i < count($unsortedArray) - 1; $i++) {

        if ($unsortedArray[$i] > $unsortedArray[$i+1]) {

            $temp = $unsortedArray[$i];
            $unsortedArray[$i] = $unsortedArray[$i + 1];
            $unsortedArray[$i+1] = $temp;

            $swap = true;
        }
    }
} while($swap);

var_dump($unsortedArray);