<?php
function getFibonacci($counter)
{
    $first = 0;
    $second = 1;

    for ($i = 1; $i <= $counter; $i++) {
        echo $first . "\n";

        // Calculate the next Fibonacci number
        $next = $first + $second;

        // Update variables for the next iteration
        $first = $second;
        $second = $next;
    }
}

getFibonacci(15);
