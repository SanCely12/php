<?php

ini_set('display_errors',1);
ini_set('display_starup_errors',1);
error_reporting(E_ALL);

$iva =19;
$precioSinIva=0;
$precioConIva=0;
$IvaCantidad=0;

if($_POST){
  $iva =$_POST["LstIva"];
  $precioSinIva =($_POST["txtPrecioSinIva"]) >0? $_POST["txtPrecioSinIva"]:0;
  $precioConIva =($_POST["txtPrecioConIva"]) >0? $_POST["txtPrecioConIva"]:0;
  
  if($precioSinIva >0){
    $precioConIva=$precioSinIva*($iva/100+1);
  }
  if($precioConIva >0){
    $precioSinIva=$precioConIva*($iva/100+1);
  }
  
  $IvaCantidad=$precioConIva-$precioSinIva;

  

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Iva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-cente py-5">
              <h1>Calculadora de IVA</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4 offset-2">
              <form method="POST">
               <div class="pb-3">
                <label for="">IVA</label>
                <select name="lstIva" id="lstIva" class="form-control">
                    <option value="10.5">10.5</option>
                    <option value="19" selected>19</option>
                    <option value="21">21</option>
                    <option value="27">27</option>
                </select>
                </div>
              </form>
            </div>
            <div class="pb-3">
                <label for="">Precio sin Iva:</label>
                <input type="text" id="txtPrecioSinIva" name="txtPrecioSinIva" class="form-control">
            </div>
            <div class="pb-3">
                <label for="">Precio con Iva</label>
                <input type="text" id="txtPrecioConIva" name="txtPrecioConIva" class="form-control">
            </div>
            <div class="pb-3">
                <button type="submit" class="btn btn-primary">ENVIAR</button>
            </div>
            <div class="col-4 pt-4">
                <table class="table tabble-hover border">
                   <tr>
                    <th>IVA</th>
                    <th><?php echo $iva;?> %</th>
                   </tr>
                   <tr>
                    <th>Precio sin IVA:</th>
                    <th><?php echo number_format ($precioSinIva,2,",","."); ?> </th>
                   </tr>
                   <tr>
                   <th>Precio con IVA:</th>
                    <th><?php echo number_format ($precioConIva,2,",","."); ?> </th>
                   </tr>
                   <tr>
                    <th>IVA cantidad:</th>
                    <th><?php echo number_format ($IvaCantidad,2,",","."); ?></th>
                   </tr>
                </table>
            </div>       
    </main>
</body>
</html>