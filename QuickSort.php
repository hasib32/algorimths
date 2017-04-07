<?php

function partition(&$arr,$leftIndex,$rightIndex)
{
    $pivotIndex = floor(($leftIndex+$rightIndex)/2);
    $pivot= $arr[$pivotIndex];

    while ($leftIndex <= $rightIndex)
    {
        while ($arr[$leftIndex] < $pivot)
            $leftIndex++;

        while ($arr[$rightIndex] > $pivot)
            $rightIndex--;

        if ($leftIndex <= $rightIndex) {

            $tmp = $arr[$leftIndex];
            $arr[$leftIndex] = $arr[$rightIndex];
            $arr[$rightIndex] = $tmp;

            $leftIndex++;
            $rightIndex--;
        }
    }
    return $leftIndex;
}

function quickSort(&$arr, $leftIndex, $rightIndex)
{
    if (count($arr) < 2) {
        return $arr;
    }

    $index = partition($arr, $leftIndex, $rightIndex);

    if ($leftIndex < $index - 1) {
        quickSort($arr, $leftIndex, $index - 1);
    }

    if ($index < $rightIndex) {
        quickSort($arr, $index, $rightIndex);
    }

    return $arr;
}
$nums = array(5,3,8,6,2,7, 1);

quickSort($nums,0,count($nums)-1);
echo implode(",",$nums)." @sorted\n";