<?php
declare(strict_types=1);

require './../vendor/autoload.php';

class A
{
    private int $a;
    public string $b;
    public ?int $c;
    public string $d;
    // public void $v; // Property A::$v cannot have type void
}

class B extends A
{
    public string $a;
    // public int $b; // Type of B::$b must be string (as in class A)
    // public int $c; // Type of B::$c must be ?int (as in class A)
    // public $d; // Type of B::$d must be string (as in class A)
}
