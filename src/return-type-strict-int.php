<?php
declare(strict_types=1);

function reverse(string $a): int
{
    return '5';
}

try {
    echo reverse('hello'); // Return value of reverse() must be of the type int, string returned
} catch (TypeError $e) {
    echo $e->getMessage();
}
