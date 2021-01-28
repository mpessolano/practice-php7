<?php
require './../vendor/autoload.php';

function stringNull1(string $str)
{
    var_dump($str);
}

function stringNull2(string $str = null)
{
    var_dump($str);
}

stringNull1('a'); // string(1) "a"
println();

stringNull2('b'); // string(1) "b"
println();

// stringNull1(); // Fatal error: Uncaught ArgumentCountError: Too few arguments to function stringNull1(), 0 passed
// println();

stringNull2(); // NULL
println();

// stringNull1(null); // Fatal error: Uncaught TypeError: Argument 1 passed to stringNull1() must be of the type string, null given,
// println();

stringNull2(null); // NULL
