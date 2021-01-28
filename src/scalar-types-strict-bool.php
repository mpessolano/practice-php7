<?php
declare(strict_types=1);

require './../vendor/autoload.php';

function test(bool $param): bool
{
    return $param;
}

//echo test('true'); // Fatal error: Uncaught TypeError: Argument 1 passed to test() must be of the type bool, string given

println(test(true)); // 1

var_dump(test(true)); // bool(true)

println();

var_dump(test(false)); // bool(false)
