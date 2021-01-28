<?php
require './../vendor/autoload.php';

class CatalogData implements IteratorAggregate
{
    public $data1 = 'Oracle Magazine';
    public $data2 = 'Java Magazine';
    public $data3 = 'PHP Magazine';

    public function getIterator()
    {
        return new ArrayIterator($this);
    }
}

function iterator(iterable $iter)
{
    foreach ($iter as $key => $value) {
        var_dump($key, $value);
        println();
    }
}

$objeto = new CatalogData();

iterator($objeto);

//------------------------------------------------------------------------------
// Output
//------------------------------------------------------------------------------
// string(5) "data1" string(15) "Oracle Magazine"
// string(5) "data2" string(13) "Java Magazine"
// string(5) "data3" string(12) "PHP Magazine"
//------------------------------------------------------------------------------
