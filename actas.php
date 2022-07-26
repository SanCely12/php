<?php
$aAlumnos=array();
$aAlumnos[] =array("Nombre"=> "Ana Valle", "notas"=> array(7,8));
$aAlumnos[] =array("Nombre"=> "Berna Paz", "notas"=> array(5,7));
$aAlumnos[] =array("Nombre"=> "Sebastian Valle", "notas"=> array(6,8));
$aAlumnos[] =array("Nombre"=> "Monica Ledma", "notas"=> array(9,8));

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<main class="container">
    <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Resultado de Formulario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table  table-hover border">
                <thead>
                    <tr>
                        <th>Alumno</th>
                        <th>Nota</th>
                        <th>Nota</th>
                        <th>Promedio</th>
                    </tr>
                </thead>    
                <tbody>
                    <?php foreach($aAlumnos as $Alumno) {?> 
                    <tr>
                        <td><?php echo $Alumno["nombre"]; ?></td>
                        <td><?php echo $Alumno["notas"]; ?></td>
                        <td><?php echo $Alumno ["notas"] ;?></td>
                        <td><?php echo promediar($Alumno ["notas"]) ;?> </td>
                    </tr>
                    <?php

                    } ?>
                </tbody>
                </table>
            </div>
        </div>
    </main>
    
</body>
</html>