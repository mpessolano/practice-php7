<?php
require './../vendor/autoload.php';

class Catalog
{
    public $title;
    public $edition;
}

$catalog = new Catalog();
$catalog->title = 'Oracle Magazine';
$catalog->edition = 'January-2021';

//------------------------------------------------------------------------------

function getCatalog(?Catalog $catalog): ?Catalog
{
    return $catalog;
}

var_dump(getCatalog($catalog)); // object(Catalog)#3 (2) { ["title"]=> string(15) "Oracle Magazine" ["edition"]=> string(12) "January-2021" }
println();

var_dump(getCatalog(null)); // NULL
println();

//------------------------------------------------------------------------------

function getCatalog2(?Catalog $catalog): ?Catalog
{
    return  null;
}

var_dump(getCatalog2($catalog)); // NULL
println();

var_dump(getCatalog2(null)); // NULL
println();

//------------------------------------------------------------------------------

function getCatalog3(?Catalog $catalog): Catalog
{
    return  $catalog;
}

var_dump(getCatalog3($catalog)); // object(Catalog)#3 (2) { ["title"]=> string(15) "Oracle Magazine" ["edition"]=> string(12) "January-2021" }
println();

//var_dump(getCatalog3(null)); // Fatal error: Uncaught TypeError: Return value of getCatalog3() must be an instance of Catalog, null returned
//println();

//------------------------------------------------------------------------------

function getCatalog4(Catalog $catalog): ?Catalog
{
    return  $catalog;
}

var_dump(getCatalog4($catalog)); // object(Catalog)#3 (2) { ["title"]=> string(15) "Oracle Magazine" ["edition"]=> string(12) "January-2021" }
println();

//var_dump(getCatalog4(null)); // Fatal error: Uncaught TypeError: Argument 1 passed to getCatalog4() must be an instance of Catalog, null given
//println();

//------------------------------------------------------------------------------

function getCatalog5(Catalog $catalog): ?Catalog
{
    return  null;
}

var_dump(getCatalog5($catalog)); // NULL
println();

//var_dump(getCatalog5(null)); // Fatal error: Uncaught TypeError: Argument 1 passed to getCatalog5() must be an instance of Catalog, null given
