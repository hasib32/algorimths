<?php

/**
 * Determine if a number is prime
 *
 * @param $number
 * @return bool
 */
function isNumberPrime($number) {

    if (!is_int($number)) {
        throw new RuntimeException('Number must be positive integer');
    }

    // 0, 1 is not prime
    if ($number < 2) {
        return false;
    }

    // 2 is the only even prime number
    if ($number === 2) {
        return true;
    }

    if ($number % 2 === 0) {
        return false;
    }

    for ($start = 2; $start <= floor($number / 2); $start++) {

        if ($number % $start === 0) {
            return false;
        }
    }

    return true;
}

/**
 * Get prime number series
 *
 * @param $limit
 * @return array
 */
function primeNumberSeries($limit)
{
    $primeNumbers = [];

    for($number = 1; $number <= $limit; $number++) {
        if (isNumberPrime($number)) {
            $primeNumbers[] = $number;
        }
    }

    return $primeNumbers;
}

$test = primeNumberSeries(101);
var_dump($test);