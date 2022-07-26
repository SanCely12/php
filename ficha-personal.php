<?php
ini_set('display_errors',1);
ini_set('display_starup_errors',1);
error_reporting(E_ALL);
date_default_timezone_set("America/Bogota");

$aNombre = "Sandra Carolina Cely";
$aEdad = "26";
$aPeliculas = ("Harry potter, Vengadores");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha personal</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<main class="container">
    <div class="row">
        <div class="col-12 text-center py-5">
        <h1>Ficha personal</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-hover border">
                <tr>
                    <th>Fecha:</th>
                    <td> <?php echo date("d/m/Y");?> </td>
                </tr>
                <tr>
                    <th>Nombre y apellido:</th>
                    <td> <?php echo $aNombre; ?> </td>
                </tr>
                <tr>
                    <th> <?php echo $aEdad; ?> </th>
                    <td>26</td>
                </tr>
                <tr>
                    <th>Peliculas favoritas</th>
                    <td> <?php echo $aPeliculas[0]; ?> <br>
                     Vengadores <br>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>