<?php

/**
 * Factorial with loop
 *
 * @param $number
 * @return int
 */
function factorial($number)
{
    $result = 1;

    for ($i = $number; $i >= 1; $i--) {
        $result *= $i;
    }
    return $result;
}

/**
 * Factorial with recursive way
 *
 * @param $number
 * @return int
 */
function recursiveFactorial($number)
{
    $result = 1;

    if ($number >= 1) {
        $result = $number * recursiveFactorial($number - 1);
    }

    return $result;
}

echo recursiveFactorial(6) . "\n";