<?php

$name = 'hasibe';

$end = strlen($name) - 1;
$start = 0;

while ($start < $end) {
    $temp = $name[$start];

    $name[$start] = $name[$end];
    $name[$end] = $temp;

    $start++;
    $end--;
}
var_dump($name);