<?php
require './../vendor/autoload.php';

class Catalog
{
    public $title;
    public $edition;

    public function getCatalog(): Catalog
    {
        return $this;
    }
}

$catalog = new Catalog();
$catalog->title = 'Oracle Magazine';
$catalog->edition = 'January-2021';

function getCatalog(Catalog $catalog): Catalog
{
    return $catalog;
}

var_dump(getCatalog($catalog)); // object(Catalog)#1 (2) { ["title"]=> string(15) "Oracle Magazine" ["edition"]=> string(12) "January-2021" }

// var_dump(getCatalog(null)); // Fatal error: Uncaught TypeError: Argument 1 passed to getCatalog() must be an instance of Catalog, null given

println();

var_dump($catalog->getCatalog()); // object(Catalog)#3 (2) { ["title"]=> string(15) "Oracle Magazine" ["edition"]=> string(12) "January-2021" }
