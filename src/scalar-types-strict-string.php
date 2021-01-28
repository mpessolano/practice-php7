<?php
declare(strict_types=1);

function reverse(string $a): string
{
    return strrev($a);
}

// echo reverse('Hola Mundo'); // odnuM aloH

// echo reverse(3.5); // Fatal error: Uncaught TypeError: Argument 1 passed to reverse() must be of the type string, float given

try {
    echo reverse(3.5); // Argument 1 passed to reverse() must be of the type string, float given
} catch (TypeError $e) {
    echo $e->getMessage();
}
