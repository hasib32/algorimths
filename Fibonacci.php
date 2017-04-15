<?php

$previousNumber1 = 0;
$previousNumber2 = 1;
$fibonaciNumber = 0;

for ($i = 0; $i <= 10; $i++) {
    echo $fibonaciNumber ."\n";

    $previousNumber1 = $previousNumber2;
    $previousNumber2 = $fibonaciNumber;

    $fibonaciNumber = $previousNumber1 + $previousNumber2;
}