<?php
declare(strict_types=1);

class Catalog
{
    public int $id;
}

$catalog = new Catalog();
$catalog->id = '123'; // Fatal error: Uncaught TypeError: Typed property Catalog::$id must be int, string used
