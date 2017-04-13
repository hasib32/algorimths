<?php

/**
 * Calculate power of any number
 *
 * @param $base
 * @param $power
 * @return int
 */

function calculatePowerOfANumber($base, $power)
{
    if ($power === 0) {
        return 1;
    }

    if ($power < 0) {
        return calculatePowerOfANumber($base, $power + 1) / $base;
    }
    else if ($power % 2 === 0) {
        $result = calculatePowerOfANumber($base, $power/2);

        return $result * $result;
    } else {
        return $base * calculatePowerOfANumber($base, ($power - 1));
    }
}

$test = calculatePowerOfANumber(2, 3);

var_dump($test);