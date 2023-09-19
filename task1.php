<?php
function evenNumbers($start, $end, $step)
{
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . "\n";
        }
    }
}

evenNumbers(1, 20, 2);
?>

<?php
//using while loop
function evenNumbers($start, $end, $step)
{
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    }
}

evenNumbers(1, 20, 2);

?>

<?php
//using do while loop

function evenNumbers($start, $end, $step)
{
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    } while ($i <= $end);
}

evenNumbers(1, 20, 2);

?>