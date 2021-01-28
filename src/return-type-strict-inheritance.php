<?php
declare(strict_types=1);

require './../vendor/autoload.php';

class Catalog
{
    /**
    * El siguiente método puede retornar cualquier tipo de dato
    * string, int, float, bool
    */
    public function printItem(string $string)
    {
        return 'Catalog: ' . $string;
    }
}

class CatalogMagazine extends Catalog
{
    /**
    * El siguiente método solo puede retornar un string
    */
    public function printItem($string): string
    {
        return 'CatalogMagazine: ' . $string;
    }
}

$catalog = new Catalog();
$catalogMagazine = new CatalogMagazine();

println($catalog->printItem('Item 1')); // Catalog: Item 1
// println($catalog->printItem(2); // Uncaught TypeError: Argument 1 passed to Catalog::printItem() must be of the type string, int given

println($catalogMagazine->printItem('Item 1')); // CatalogMagazine: Item 1
println($catalogMagazine->printItem(2)); // CatalogMagazine: 2
