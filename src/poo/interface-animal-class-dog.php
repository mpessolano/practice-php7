<?php
declare(strict_types=1);

require './../../vendor/autoload.php';

interface Animal
{
    public function breath(): string;
    public function eat(): string;
}

class Dog implements Animal
{
    // new method
    public function bark(): string
    {
        return 'woof';
    }

    // implemented methods
    public function breath(): string
    {
        return 'breathing';
    }

    public function eat(): string
    {
        return 'eating';
    }
}

$dog = new Dog;
println($dog->breath());
println($dog->bark());
println($dog->eat());

//------------------------------------------------------------------------------
// Output for PHP >=7.1.0 / PHP 8
//------------------------------------------------------------------------------
// breathing
// woof
// eating
//------------------------------------------------------------------------------
