<?php

ini_set('display_errors',1);
ini_set('display_starup_errors',1);
error_reporting(E_ALL);

function calcularNeto ($bruto){
    
    $neto = $bruto -($bruto*0.17);
    return $neto;
$aNotas = array (9,8,9.50,4,7,8);



}

echo "El sueldo neto es $" .calcularNeto(80000);
?>