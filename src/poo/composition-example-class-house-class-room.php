<?php
declare(strict_types=1);

// require './../../vendor/autoload.php';

class Room
{
    private House $house;
}

class House
{
    private Room $room;

    public function __construct()
    {
        $this->room = new Room();
    }
}

$house = new House();

//------------------------------------------------------------------------------
// Executed in PHP >=7.4.0 / PHP 8
//------------------------------------------------------------------------------
