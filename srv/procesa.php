<?php

require_once __DIR__ . "/../lib/php/recuperaTexto.php";
require_once __DIR__ . "/../lib/php/devuelveJson.php";

// Recupera el valor del chiste usando la función recuperaTexto
$chiste = recuperaTexto("chiste");

// Verifica si el chiste fue recibido correctamente
if ($chiste) {
    $resultado = "Chiste recibido: {$chiste}";
} else {
    $resultado = "No se recibió ningún chiste.";
}

// Devuelve el resultado en formato JSON
devuelveJson($resultado);
