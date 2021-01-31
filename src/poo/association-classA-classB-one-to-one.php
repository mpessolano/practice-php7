<?php
//------------------------------------------------------------------------------
// Association: if class A holds a class level reference to class B.
// (Permanent relationship)
//------------------------------------------------------------------------------

declare(strict_types=1);

class A
{
    private B $b; // permanent

    public function getB(): B
    {
        return $this->b;
    }

    public function setB(B $b): void
    {
        $this->b = $b;
    }
}

class B
{
    private A $a; // permanent

    public function getA(): A
    {
        return $this->a;
    }

    public function setA(A $a): void
    {
        $this->a = $a;
    }
}

$a = new A();
$b = new B();

// Association
$a->setB($b);
$b->setA($a);
