<?php
function maximo($aVector){
    $valorMaximo =0;
    foreach($aVector as $Valor){
        if($valorMaximo < $Valor){
            $valorMaximo = $Valor;
        }

    }
    return $valorMaximo;
}
$aNotas= array(8,4,5,3,9,1);
$aSueldos =array (800, 400,500,3000,900,1000);
echo "El promedio es ". maximo($aNotas). "<br>";
echo "El promedio es ". maximo($aSueldos). "<br>";
?>