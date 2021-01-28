<?php
declare(strict_types=1);

function sumInts(int ...$ints)
{
    return array_sum($ints);
}

// echo sumInts(1, '3', 0, 3.6); // Fatal error: Uncaught TypeError: Argument 2 passed to sumInts() must be of the type int, string given

// echo sumInts(1, 3, 0, 3.6); // Fatal error: Uncaught TypeError: Argument 4 passed to sumInts() must be of the type int, float given

//echo sumInts(1, 3, 0, null); // Fatal error: Uncaught TypeError: Argument 4 passed to sumInts() must be of the type int, null given

echo sumInts(1, 3, 0, 3); // 7
