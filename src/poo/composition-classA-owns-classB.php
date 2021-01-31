<?php
//------------------------------------------------------------------------------
// Composition: stronger Association or relationship between 2 objects. You are
//  creating an object of a class B inside another class A.

// If we delete class A , B won't exist( B object is created inside A only).

// Another example: Body & Liver. Liver can't exist outside Body.
//------------------------------------------------------------------------------

declare(strict_types=1);

class B
{

}

class A
{
    private B $b;

    // public function __construct()
    // {
    //     $this->b = new B();
    // }

    public function setB(): void
    {
        $this->b = new B();
    }
}

$a = new A();
$a->setB();
