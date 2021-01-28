<?php

class Catalog
{
    public $title;
    public $edition;
}

$catalog = new Catalog();
$catalog->title = 'Oracle Magazine';
$catalog->edition = 'January-2021';

function getCatalog(Catalog $catalog): void
{
    //return null; // Fatal error: A void function must not return a value (did you mean "return;" instead of "return null;"?)
    return;
}

var_dump(getCatalog($catalog));
