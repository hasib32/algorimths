<?php

function sumOfInts(int ...$ints): float
{
    return array_sum($ints);
}
echo 4 <=> 5 . "\n";
echo 7 <=> 3 . "\n";
echo 7 <=> 7 . "\n";

//var_dump(sumOfInts(2,3,4,4.5));