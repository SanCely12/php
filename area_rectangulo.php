<?php

ini_set('display_errors',1);
ini_set('display_starup_errors',1);
error_reporting(E_ALL);

function calcularAreaRect($base, $altura) {
    $resultado = $base * $altura;
    return $resultado;
  }

echo "El area es" .calcularAreaRect(100,0.60). "<br>";
echo "El area es" .calcularAreaRect (800,300);
?>