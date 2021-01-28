<?php
require './../vendor/autoload.php';

$catalog = ['Oracle Magazine', 'Java Magazine', 'PHP Magazine'];

function iterator(iterable $iter)
{
    foreach ($iter as $val) {
        println($val);
    }
}

iterator($catalog);

//------------------------------------------------------------------------------
// Output
//------------------------------------------------------------------------------
// Oracle Magazine
// Java Magazine
// PHP Magazine
//------------------------------------------------------------------------------

/*
println();

function eachArray(array $array)
{
    foreach ($array as $val) {
        println($val);
    }
}

eachArray($catalog);
*/
