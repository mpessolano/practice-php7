<?php
//------------------------------------------------------------------------------
// Dependency: class A is dependent on class B. Dependency indicates that you
// may invoke one of the APIs of the received class (B) reference and any
// modification to that class may break your class as well.
// (Temporary relationship)
//
// One class depends on another if the independent class is a parameter variable
// or local variable of a method of the dependent class.
//------------------------------------------------------------------------------

declare(strict_types=1);

class A
{
    public function getDependency(B $b): void
    {
        $b->getMethod(); // temporary
    }
}

class B
{
    public function getMethod(): void
    {
        echo 'Invoked method in class B';
    }
}

$a = new A();
$b = new B();

$a->getDependency($b);
