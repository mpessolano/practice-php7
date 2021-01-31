<?php
//------------------------------------------------------------------------------
// Aggregation: weaker type of Association between 2 objects.
//
// Even if you delete class A, B will exist outside(B is created outside and
// passed to Class A).
//
// Another example of this: Man & Car. Man has a Car but Man & Car exist
// independently.
//------------------------------------------------------------------------------

declare(strict_types=1);

class B
{

}

class A
{
    private B $b;

    public function __construct(B $b)
    {
        $this->b = $b;
    }

    /**
    * Object B is passed as an argument of a method
    */
    public function setB(B $b): void
    {
        $this->b = $b;
    }
}

$b = new B();
$a = new A($b);
