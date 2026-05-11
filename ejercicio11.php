<?php

$correo = "edgar@gmail.com";

$verificar = strpos($correo, "@");

if ($verificar !== false) {

    echo "Es valido<br>";

} else {

    echo "No es valido<br>";

}