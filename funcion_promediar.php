<?php
ini_set('display_errors',1);
ini_set('display_starup_errors',1);
error_reporting(E_ALL);

function promediar($aNumeros){
$suma = 0;
foreach ($aNumeros as $aNumeros) {
$suma += $aNumeros;

}

}

$aNotas= array(8,4,5,3,9,1);
$aSueldos =array (800, 400,500,3000,900,1000);
echo "El promedio es ". promediar($aNotas). "<br>";
echo "El promedio es ". promediar($aSueldos). "<br>";
?>
