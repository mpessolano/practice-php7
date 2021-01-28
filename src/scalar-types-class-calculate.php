<?php

class Calculate
{
    public function sum(int $a, int $b): void
    {
        echo 'Sum = ' . ($a + $b);
    }
}

$cal = new Calculate();
$cal->sum(8,5); // Sum = 13
