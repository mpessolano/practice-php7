<?php
declare(strict_types=1);

namespace MyRobot;

class Tarea
{
    private string $descripcion;
    private int $prioridad;

    public function __construct(string $descripcion, int $prioridad)
    {
        $this->descripcion = $descripcion;
        $this->prioridad = $prioridad;
    }

    public function darDescripcion(): string
    {
        return $this->descripcion;
    }

    public function cambiarDescripcion(string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    public function darPrioridad(): int
    {
        return $this->prioridad;
    }

    public function cambiarPrioridad(int $prioridad): void
    {
        $this->prioridad = $prioridad;
    }
}
