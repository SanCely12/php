<?php
ini_set('display_errors',1);
ini_set('display_starup_errors',1);
error_reporting(E_ALL);

if ($_POST){

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
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
                        <th>Nombre</th>
                        <th>DNI</th>
                        <th>Telefono</th>
                        <th>Edad</th>
                    </tr>
                </thead>    
                <tbody>
                    <tr>
                        <td><?php echo $Nombre; ?></td>
                        <td><?php echo $DNI; ?></td>
                        <td><?php echo $Telefono ;?></td>
                        <td><?php echo $Edad ;?> </td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>