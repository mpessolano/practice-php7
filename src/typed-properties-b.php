<?php
declare(strict_types=0);

require './../vendor/autoload.php';

include 'typed-properties-a.php';

$a = new A;

$a->a = '1';

var_dump($a->a); // int(1)
println();

sort($a->array);

var_dump($a->array); // array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }
println();

$x = &$a->x; // Initialized to null
$y = &$a->y; // Fatal error: Uncaught Error: Cannot access uninitialized non-nullable property A::$y by reference
