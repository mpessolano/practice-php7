<?php
declare(strict_types=1);

require './../../vendor/autoload.php';

interface A
{
    public function interfaceMethod(): string;
}

class B implements A
{
    public function interfaceMethod(): string
    {
        return 'Implemented the interface method';
    }
}

$b = new B();
println($b->interfaceMethod());

//------------------------------------------------------------------------------
// Output for PHP >=7.1.0 / PHP 8
//------------------------------------------------------------------------------
// Implemented the interface method
//------------------------------------------------------------------------------
