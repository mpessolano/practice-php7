<?php
declare(strict_types=1);

require './../vendor/autoload.php';

class Catalog
{
    public int $id, $journalId;
    public ?string $journal=null;
    public static string $edition='January-2021';
    var bool $flag;
    public float $f=1;

    public function __construct(int $id, int $journalId, string $journal, bool $flag)
    {
        $this->id = $id;
        $this->journalId = $journalId;
        $this->journal = $journal;
        $this->flag = $flag;
    }
}

$catalog = new Catalog(123, 456, 'PHPMagazine', true);

println('CatalogID: ' . $catalog->id);
println('JournalID: ' . $catalog->journalId);
println('Journal: ' . $catalog->journal);
println('Flag: ' . $catalog->flag);
println('Edition: ' . Catalog::$edition);

//------------------------------------------------------------------------------
// Output
//------------------------------------------------------------------------------
// CatalogID: 123
// JournalID: 456
// Journal: PHPMagazine
// Flag: 1
// Edition: January-2021
//------------------------------------------------------------------------------
