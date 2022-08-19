<?php

ini_set('display_errors',1);
ini_set('display_starup_errors',1);
error_reporting(E_ALL);

function print_f($variable){
    if(is_array($variable)){
        $archivo=fopen('datos.txt','a+');
foreach($variable as $item){
fwrite($archivo, $item);
}
fclose($archivo);
    } else{
        file_put_contents("datos.txt", $variable);
    }
    echo"Archivo generado.";
}
$aNotas=array(8,5,7,9,10);
$msg="Este es un mensaje!";
print_f($aNotas);
?>