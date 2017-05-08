<?php

function permutation(&$string, $start, $end)
{
    echo $start."\n";
    if ($start == $end) {
        echo implode(" ", $string) . "\n";
    } else {
        for($j = $start; $j <= $end; $j++) {
            swap($string, $start, $j);
            permutation($string, $start+1, $end);
            swap($string, $start, $j);
        }
    }
}

function swap(&$string, $start, $end)
{
    $temp = $string[$start];
    $string[$start] = $string[$end];
    $string[$end] = $temp;
}

$string = ['A', 'B', 'C'];

permutation($string, 0, count($string) -1);