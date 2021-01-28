<?php
// declare(strict_types=0);

function sumInts(int ...$ints)
{
    return array_sum($ints);
}

echo sumInts(1, '3', 0, 3.6); // 7

// echo sumInts(1,'3', 0, null); // Fatal error: Uncaught TypeError: Argument 4 passed to sumInts() must be of the type int, null given
