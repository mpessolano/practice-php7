<?php
declare(strict_types=1);

function reverse(string $a): string
{
    return 5;
}

try {
    echo reverse('hello'); // Return value of reverse() must be of the type string, int returned
} catch (TypeError $e) {
    echo $e->getMessage();
}
