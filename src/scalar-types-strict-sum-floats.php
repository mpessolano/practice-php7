<?php
declare(strict_types=1);

function sumFloats(float ...$floats): float
{
    return array_sum($floats);
}

echo sumFloats(1.1, 2.5, 3); // 6.6

//------------------------------------------------------------------------------

function sumFloats2(float $a, float $b): int
{
    return $a + $b;
}

//echo sumFloats2(1, '3'); // Fatal error: Uncaught TypeError: Argument 2 passed to sumFloats2() must be of the type float, string given


echo sumFloats2(1, 3); // Fatal error: Uncaught TypeError: Return value of sumFloats2() must be of the type int, float returned
