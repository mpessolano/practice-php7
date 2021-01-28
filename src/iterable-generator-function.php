<?php
require './../vendor/autoload.php';

function generator(): iterable
{
    yield 'a';
    yield 'b';
    yield 'c';
    return ['d', 'e', 'f'];
}

$gen = generator();

foreach ($gen as $value) {
    println($value);
}

var_dump($gen->getReturn());

//------------------------------------------------------------------------------
// Output
//------------------------------------------------------------------------------
// a
// b
// c
// array(3) { [0]=> string(1) "d" [1]=> string(1) "e" [2]=> string(1) "f" }
//------------------------------------------------------------------------------


