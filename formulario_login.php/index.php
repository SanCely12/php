<?php
ini_set('display_errors',1);
ini_set('display_starup_errors',1);
error_reporting(E_ALL);

if ($_POST){
   $usuario =$_REQUEST["txtUsuario"];
   $clave = $_REQUEST ["txtClave"];

   if ($usuario != "" && $clave != ""){
    header("Location: acceso-confirmado.php");
    } else {
        $mensaje = "Valido para usuarios registrados.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
   <main class="container">
    <div class="row">
        <div class="col-12 mt-5">
            <h1>Formulario de ingreso</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <?php if (isset($mensaje)){?>
            <div class="alert alert-danger" role="alert">
                <?php echo $mensaje;?>
            </div>
            <?php }; ?>
            <form method="$_POST" action="">
                <div class="my-3">
                    <label for="">Usuario</label>
                    <input type="text" name="txtUsuario" id="txtUsuario" class="form-control">
                </div>
                <div class="my-3">
                    <label for="">Clave</label>
                    <input type="password" name="txtClave" id="txtClave" class="form-control">
                </div>
                <div>
                    <button type="submit" name="btnIngresar" class="btn btn-primary">INGRESAR</button>
                </div>
            </form>

        </div>
    </div>
   </main> 
</body>
</html>