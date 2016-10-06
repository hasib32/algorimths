<?php

$primes = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];

$targetPrime = 97;
$min = 0;
$max = count($primes) - 1;
$guessPosition = floor(($min + $max)/2);
$guessNumber = $primes[$guessPosition];

$numberOfTries = 1;

foreach($primes as $prime) {
    echo "Try #$numberOfTries is : $guessNumber\n";
    if ($guessNumber == $targetPrime) {
        echo "Found target prime with $numberOfTries tries and target prime is $guessNumber\n";
        break;
    } elseif($guessNumber < $targetPrime) {
        $min = $guessPosition + 1;
        $guessPosition = floor(($min + $max)/2);
        $guessNumber = $primes[$guessPosition];
    } else {
        $max = $guessPosition -1;
        $guessPosition = floor(($min + $max)/2);
        $guessNumber = $primes[$guessPosition];
    }
    $numberOfTries++;
}