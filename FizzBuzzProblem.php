<?php

/**
 * @param int $number
 * @param int $multiplier
 * @return bool
 */
function isNumberMultiplyBY(int $number, int $multiplier) : bool {

    if ($number % $multiplier === 0) {
        return true;
    }

    return false;
}

/**
 * Write a program that prints the numbers from 1 to 100.
 * But for multiples of three print “Fizz” instead of the number and
 * for the multiples of five print “Buzz”.
 * For numbers which are multiples of both three and five print “FizzBuzz”
 */
function fizzBuzzProblem() {

    for ($number = 1; $number <= 100; $number++) {

        if (isNumberMultiplyBY($number, 3) && isNumberMultiplyBY($number, 5)) {
            echo "$number is: FizzBuzz\n";
        } elseif (isNumberMultiplyBY($number, 3)) {
            echo "$number is: Fizz\n";
        } elseif (isNumberMultiplyBY($number, 5)) {
            echo "$number is : Buzz\n";
        } else {
            echo $number . "\n";
        }
    }
}

fizzBuzzProblem();