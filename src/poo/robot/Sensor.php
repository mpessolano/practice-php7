<?php
declare(strict_types=1);

namespace MyRobot;

abstract class Sensor
{
    protected int $id;
    protected Robot $robot;

    public function darId(): int
    {
        return $this->id;
    }

    abstract public function transmitirFlujoDatos(): array;

    public function darRobot(): Robot
    {
        return $this->robot;
    }
}
