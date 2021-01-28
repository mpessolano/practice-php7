<?php
declare(strict_types=1);

require './../vendor/autoload.php';

class A
{
    public int $a;
    public array $array = [3, 1, 2];
    public ?int $x;
    public int $y;
}

// $a = new A;

// $a->a = '1'; // Fatal error: Uncaught TypeError: Typed property A::$a must be int, string used

// var_dump($a->a);
// println();

// sort($a->array);

// var_dump($a->array); // array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }
// println();

// $x = &$a->x; // Initialized to null
// $y = &$a->y; // Fatal error: Uncaught Error: Cannot access uninitialized non-nullable property A::$y by reference
