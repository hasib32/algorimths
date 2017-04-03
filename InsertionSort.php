<?php

$unsortedArray = [14, 33, 27, 10];

for($i=0; $i < count($unsortedArray); $i++) {
    $minNumber = $unsortedArray[$i];
    $j = $i - 1;
    // This part is looping until j is greater than or equal 0 and current j is greater than min
    while ($j >= 0 && $unsortedArray[$j] > $minNumber) {
        $unsortedArray[$j + 1] = $unsortedArray[$j];
        $j--;
    }

    $unsortedArray[$j + 1] = $minNumber;
}

var_dump($unsortedArray);