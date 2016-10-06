<?php

$unsortedArray = [-17,3,5,7,21,1,2,8,-1,5];

for($i = 0; $i < count($unsortedArray);) {

    $min = $unsortedArray[$i];
    $minIndexFoundAt = $i;

    for($j = $i; $j < count($unsortedArray);) {
        if (isset($unsortedArray[$j+1]) ) {
            if($min > $unsortedArray[$j+1]) {
                $min = $unsortedArray[$j+1];
                $minIndexFoundAt = $j+1;
            }
        }
        $j++;
    }

    $temp = $unsortedArray[$i];
    $unsortedArray[$i] = $min;
    $unsortedArray[$minIndexFoundAt] = $temp;

    $i++;
}

print_r($unsortedArray);