<?php
declare(strict_types=1);

namespace MyRobot;

class SensorProximidad extends Sensor
{
    private float $distanciaMinima;

    public function transmitirFlujoDatos(): array
    {

    }

    public function darDistanciaMinima(): float
    {
        return $this->distanciaMinima;
    }

    public function cambiarDistanciaMinima(float $distancia): void
    {
        $this->distanciaMinima = $distancia;
    }

    public function darAlarmaProximidad(): string
    {
        // return Orientacion::const;
    }
}
