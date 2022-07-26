<?php

ini_set('display_errors',1);
ini_set('display_starup_errors',1);
error_reporting(E_ALL);

function contar($aArray){
    $contador =0;
    foreach ($aArray as $item) {
      $contador++;
    }
    return $contador;
}

$aNotas = array(9,8,9.50,4,7,8);

$aPacientes = array();
$aPacientes [] = array (
    "dni"=> "33.765.012",
    "nombre" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.50,
);
$aPacientes = array();
$aPacientes [] = array (
    "dni"=> "23.684.385",
    "nombre" => "Gonzalo Bustamante",
    "edad" => 66,
    "peso" => 79,
);
$aPacientes = array();
$aPacientes [] = array (
    "dni"=> "101.565.053",
    "nombre" => "Laura Cely",
    "edad" => 25,
    "peso" => 58,
);
$aPacientes = array();
$aPacientes [] = array (
    "dni"=> "51.895.111",
    "nombre" => "Doris Barrientos",
    "edad" => 53,
    "peso" => 62,
);

$aProductos= array();
$aProductos = array ("nombre"=>"Smart TV 55 4K UHD", 
    "marca"=> "Hitachi",
    "modelo"=> "554KS2O",
    "stock"=> 60,
    "precio"=>58000,
);
$aProductos[]= array("nombre"=>"Samsung Galaxy A30 Blanco",
    "marca"=>"Samsung",
    "modelo"=>"Galaxy A30",
    "stock"=> 0,
    "precio"=>22000,
);
$aProductos[]= array("nombre"=>"Aire Acondiconado Split Interter Frio/Calor Surrey 2900F",
    "marca"=>"Surrey",
    "modelo"=>"553AIQ12O1E",
    "stock"=> 5,
    "precio"=>45000,
);



echo "<br>Cantidad de productos" .contar($aProductos);
echo "<br>Cantidad de pacientes:" .contar($aPacientes);
echo "<br>Cantidad de notas:" .contar($aNotas);
?>