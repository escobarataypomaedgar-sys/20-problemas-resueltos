<?php

$hoy = time();

$finAnio = strtotime(date("Y") . "-12-31");

$diasFaltan = ($finAnio - $hoy) / 86400;

echo "Faltan " . floor($diasFaltan) . " días para fin de año.";

?>