<?php
declare(strict_types=1);

require './../../vendor/autoload.php';

class A
{
    protected int $variable = 10;

    public function parentMethod(): string
    {
        return 'Invoked method of parent class';
    }
}

class B extends A
{
    public function getVariable(): int
    {
        return $this->variable;
    }
}

$b = new B();

println('Variable: ' . $b->getVariable());
println($b->parentMethod());

//------------------------------------------------------------------------------
// Output for PHP >=7.4.0 / PHP 8
//------------------------------------------------------------------------------
// Variable: 10
// Invoked method of parent class
//------------------------------------------------------------------------------
