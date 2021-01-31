<?php
declare(strict_types=1);

namespace MyRobot;

class Robot
{
    private string $nombre;
    private bool $estado;
    private float $coordenadaX;
    private float $coordenadaY;
    private string $orientacion;
    private ?Equipo $equipo;
    private Escenario $escenario;
    private array $sensores = array();
    private array $tareas = array();

    public function __construct(string $nombre, bool $estado, float $coordenadaX, float $coordenadaY, string $orientacion, Escenario $escenario)
    {
        $this->nombre = $nombre;
        $this->estado = $estado;
        $this->coordenadaX = $coordenadaX;
        $this->coordenadaY = $coordenadaY;
        $this->orientacion = $orientacion;
        $this->escenario = $escenario;
    }

    public function darNombre(): string
    {
        return $this->nombre;
    }

    public function cambiarNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function darEstado(): bool
    {
        return $this->estado;
    }

    public function cambiarEstado(): void
    {
        $this->estado = !$this->estado;
    }

    public function darCoordenadaX(): float
    {
        return $this->coordenadaX;
    }

    public function darCoordenadaY(): float
    {
        return $this->coordenadaY;
    }

    public function darOrientacion(): string
    {
        return $this->orientacion;
    }

    /**
    * A la derecha en el mismo sentido que las agujas del reloj
    * NORTE -> ESTE
    * ESTE -> SUR
    * SUR -> OESTE
    * OESTE -> NORTE
    */
    public function rotarSentidoHorario(): void
    {
        if ($this->darOrientacion() == 'Norte') {
            $this->orientacion = Orientacion::ESTE;
        } elseif ($this->darOrientacion() == 'Este') {
            $this->orientacion = Orientacion::SUR;
        } elseif ($this->darOrientacion() == 'Sur') {
            $this->orientacion = Orientacion::OESTE;
        } else {
            $this->orientacion = Orientacion::NORTE;
        }
    }

    /**
    * A la izquierda en el sentido contrario a las agujas del reloj
    * NORTE -> OESTE
    * OESTE -> SUR
    * SUR -> ESTE
    * ESTE -> NORTE
    */
    public function rotarSentidoAntiHorario(): void
    {
        if ($this->darOrientacion() == 'Norte') {
            $this->orientacion = Orientacion::OESTE;
        } elseif ($this->darOrientacion() == 'Oeste') {
            $this->orientacion = Orientacion::SUR;
        } elseif ($this->darOrientacion() == 'Sur') {
            $this->orientacion = Orientacion::Este;
        } else {
            $this->orientacion = Orientacion::NORTE;
        }
    }

    public function avanzar(float $distancia): void
    {
        $distancia = abs($distancia);

        if ($this->darOrientacion() == 'Norte') {
            $this->coordenadaY += $distancia;
        } elseif ($this->darOrientacion() == 'Este') {
            $this->coordenadaX += $distancia;
        } elseif ($this->darOrientacion() == 'Sur') {
            $this->coordenadaY -= $distancia;
        } else {
            $this->coordenadaX -= $distancia;
        }
    }

    public function darEscenario(): Escenario
    {
        return $this->escenario;
    }

    public function darTareas(): array
    {
        return $this->tareas;
    }

    public function asignarTarea(Tarea $tarea): void
    {
        $this->tareas[] = $tarea;
    }

    public function eliminarTarea(Tarea $tarea): void
    {
        if (($key = array_search($tarea, $this->tareas, true)) !== FALSE) {
            unset($this->tareas[$key]);
        }
    }

    public function agregarSensor(Sensor $sensor): void
    {
        $this->sensores[] = $sensor;
    }

    public function eliminarSensor(Sensor $sensor): void
    {
        if (($key = array_search($sensor, $this->sensores, true)) !== FALSE) {
            unset($this->sensores[$key]);
        }
    }

    public function darSensores(): array
    {
        return $this->sensores;
    }

    public function darEquipo(): Equipo
    {
        return $this->equipo;
    }

    public function asignarAEquipo(Equipo $equipo): void
    {
        $equipo->asignarRobot($this);
        $this->equipo = $equipo;
    }
}
