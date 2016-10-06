<?php

$input1 = fgets(STDIN);
echo "Input Number one: $input1\n";
$input2 = fgets(STDIN);
echo "Input Number two: $input2\n";

echo "swapping..\n";

$temp = $input1;
$input1 = $input2;
$input2 = $temp;

echo "After swapping Input Number one is: $input1\n";
echo "And Input Number two is: $input2\n";