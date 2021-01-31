<?php
declare(strict_types=1);

namespace MyRobot;

class Equipo
{
    private string $nombre;
    private array $robots = array();

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function darNombre(): string
    {
        return $this->nombre;
    }

    public function cambiarNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function darRobots(): array
    {
        return $this->robots;
    }

    public function asignarRobot(Robot $robot): void
    {
        $this->robots[] = $robot;
    }

    public function removerRobot(Robot $robot): void
    {
        if (($key = array_search($robot, $this->robots, true)) !== FALSE) {
            unset($this->robots[$key]);
        }
    }
}
