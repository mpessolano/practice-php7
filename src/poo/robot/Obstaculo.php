<?php
declare(strict_types=1);

namespace MyRobot;

class Obstaculo
{
    private array $coordenadasX = array();
    private array $coordenadasY = array();

    public function __construct(array $coordenadasX, array $coordenadasY)
    {
        $this->coordenadasX = $coordenadasX;
        $this->coordenadasY = $coordenadasY;
    }

    public function darCoordenadasX(): array
    {
        return $this->coordenadasX;
    }

    public function darCoordenadasY(): array
    {
        return $this->darCoordenadasY;
    }
}
