<?php
require './../vendor/autoload.php';

class ClassA
{
    public function iterator(array $arr): ?iterable
    {
        foreach ($arr as $val) {
            println($val);
        }

        return null;
    }
}

class ClassB extends ClassA
{
    public function iterator(iterable $iter): ?array
    {
        foreach ($iter as $val) {
            println($val);
        }

        return null;
    }
}

$catalog = ['Oracle Magazine', 'Java Magazine', 'PHP Magazine'];

// $classA = new ClassA();
// $classA->iterator($catalog);

$classB = new ClassB();
$classB->iterator($catalog);

//------------------------------------------------------------------------------
// Output
//------------------------------------------------------------------------------
// Oracle Magazine
// Java Magazine
// PHP Magazine
//------------------------------------------------------------------------------
