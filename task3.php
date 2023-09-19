<?php
$count = 0;
$first = 0;
$second = 1;

while ($count < 10) {
    $fibonacci = $first;
    $first = $second;
    $second = $fibonacci + $first;

    if ($fibonacci > 100) {
        break;
    }

    echo $fibonacci . "\n";
    $count++;
}
