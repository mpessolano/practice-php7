<?php
declare(strict_types=1);

namespace MyRobot;

class Escenario
{
    private string $nombre;
    private float $coordenadaX1;
    private float $coordenadaY1;
    private float $coordenadaX2;
    private float $coordenadaY2;
    private array $robotsPresentes = array();
    private array $obstaculos = array();

    public function __construct(string $nombre, array $coordenadas1, array $coordenadas2)
    {
        $this->nombre = $nombre;
        $this->coordenadaX1 = $coordenadas1[0];
        $this->coordenadaY1 = $coordenadas1[1];
        $this->coordenadaX2 = $coordenadas2[0];
        $this->coordenadaY2 = $coordenadas2[1];
    }

    public function darNombre(): string
    {
        return $this->nombre;
    }

    public function darCoordenadas1(): array
    {
        return [$this->coordenadaX1, $this->coordenadaY1];
    }

    public function darCoordenadas2(): array
    {
        return [$this->coordenadaX2, $this->coordenadaY2];
    }

    public function darRobotsPresentes(): array
    {
        return $this->robotsPresentes;
    }

    public function asignarRobot(Robot $robot): void
    {
        $this->robotsPresentes[] = $robot;
    }

    /**
    * Composition
    */
    public function crearObstaculo(array $coordenadas): void
    {
        $this->obstaculos[] = new Obstaculo($coordenadas[0], $coordenadas[1]);
    }

    public function removerObstaculo(Obstaculo $obstaculo): void
    {
        if (($key = array_search($obstaculo, $this->obstaculos, true)) !== FALSE) {
            unset($this->obstaculos[$key]);
        }
    }

    public function darObstaculos(): array
    {
        return $this->obstaculos;
    }

    /**
    * Dependency
    * Escenario <<use>> Equipo
    */
    public function darEquipos(): array
    {

    }
}
