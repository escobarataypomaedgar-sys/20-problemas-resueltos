<?php

$dias = [
    "Sunday" => "Domingo",
    "Monday" => "Lunes",
    "Tuesday" => "Martes",
    "Wednesday" => "Miércoles",
    "Thursday" => "Jueves",
    "Friday" => "Viernes",
    "Saturday" => "Sábado"
];

// Obtener día actual
$diaActual = date("l");

// Mostrar el día en español
echo "Hoy es: " . $dias[$diaActual];

?>