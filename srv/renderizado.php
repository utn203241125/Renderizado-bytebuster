<?php

require_once __DIR__ . "/../lib/php/devuelveJson.php";
require_once __DIR__ . "/../lib/php/devuelveErrorInterno.php";

try {

 $lista = [
  [
    "nombre" => "Alarcon Camarillo Joseph Aaron",
  "texto" => "¿Qué hace un perro con un taladro? Ta—ladrando"
  ],
  [
   "nombre" => "Dominguez Valentin Hyrum Enoc",
  "texto" => "¿Cómo se despiden los químicos? Ácido un placer”."
  ],
  [
   "nombre" => "Luna Calvillo German",
  "texto" => "¿Cuál es el último animal que subió al arca de Noé? El del-fin"
  ],
  [
    "nombre" => "Olguin Gomez Danna Marial",
   "texto" => "¿Cuál es el café más peligroso del mundo? El ex-preso"
   ],
  [
   "nombre" => "Palacios Castro Luis Enrique",
  "texto" => "¿Qué le dice un techo a otro? Techo de menos"
  ]
 ];

 $render = "";
 foreach ($lista as $modelo) {
  $nombre = htmlentities($modelo["nombre"]);
  $texto = htmlentities($modelo["texto"]);
  $render .=
   "<dt>{$nombre}</dt>
    <dd>{$texto}</dd>";
 }

 devuelveJson(["lista" => ["innerHTML" => $render]]);
} catch (Throwable $error) {

 devuelveErrorInterno($error);
}
