<?php
declare(strict_types=1);

require './../../../vendor/autoload.php';

use MyRobot\{Escenario, Orientacion};
use MyRobot\Robot;

$escenario = new Escenario("Mumbo's Mountain", [1.0, 5.0], [4.0, 2.0]);

$robot = new Robot('R2D2', false, 10, 1, Orientacion::NORTE, $escenario);

$robot->cambiarEstado();

println('Datos del robot' . "\n");
println('Nombre: ' . $robot->darNombre());
println('Estado: ' . $robot->darEstado());
println('Coordenada X: ' . $robot->darCoordenadaX());
println('Coordenada Y: ' . $robot->darCoordenadaY());
println('Orientacion: ' . $robot->darOrientacion() . "\n");

println('--------------------------------------------------' . "\n");
println('Escenario: ' . $robot->darEscenario()->darNombre() . "\n");
println('--------------------------------------------------' . "\n");

$tarea = new \MyRobot\Tarea('Prender luces', 2);

println('Tareas del robot' . "\n");
println('Cantidad de tareas: ' . count($robot->darTareas()) . "\n");

println('Asignamos la tarea: ' . $tarea->darDescripcion());
$robot->asignarTarea($tarea);
println('Cantidad de tareas: ' . count($robot->darTareas()) . "\n");

$tareas = $robot->darTareas();
println('Lista de tareas: ');
foreach ($tareas as $tarea) {
    println('- ' . $tarea->darDescripcion());
}
println();

println('Eliminamos la tarea: ' . $tarea->darDescripcion());
$robot->eliminarTarea($tarea);
println('Cantidad de tareas: ' . count($robot->darTareas()));

//------------------------------------------------------------------------------
// Output for PHP >=7.4.0 / PHP 8
//------------------------------------------------------------------------------
// Datos del robot

// Nombre: R2D2
// Estado: 1
// Coordenada X: 10
// Coordenada Y: 1
// Orientacion: Norte

// --------------------------------------------------

// Escenario: Mumbo's Mountain

// --------------------------------------------------

// Tareas del robot

// Cantidad de tareas: 0

// Asignamos la tarea: Prender luces
// Cantidad de tareas: 1

// Lista de tareas:
// - Prender luces

// Eliminamos la tarea: Prender luces
// Cantidad de tareas: 0
//------------------------------------------------------------------------------
