<?php
// declare(strict_types=0);

require './../vendor/autoload.php';

function reverse(string $a)
{
    return strrev($a);
}

println(reverse('Hola Mundo')); // odnuM aloH

println(reverse(3.5)); // 5.3

try {
    echo reverse(3.5); // 5.3
} catch (TypeError $e) {
    echo $e->getMessage();
}
