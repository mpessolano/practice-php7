<?php
require './../vendor/autoload.php';

function hello(): ?string
{
    return 'Hello';
}

println(hello()); // Hello

function helloReturnNull(): ?string
{
    return null;
}

var_dump(helloReturnNull()); // NULL
println();

function helloNullArg(?string $name)
{
    return 'Hello';
}

println(helloNullArg(null)); // Hello
