<?php
$count = 0;

for ($i = 0; $i <= 3; $i++) {
    for ($j = 0; $j <= 3; $j++) {
        echo $i. " , ", $j. "\n";
        $count++;
    }
}

echo $count. "\n";