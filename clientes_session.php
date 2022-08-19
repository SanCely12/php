<?php
ini_set('display_errors',1);
ini_set('display_starup_errors',1);
error_reporting(E_ALL);

session_start();

if (isset($_SESSION["ListadoClientes"])){

    $aClientes=$_SESSION["ListadoClientes"];

}  else {
    $_Clientes=array();
    
}


if($_POST){

    $nombre=$_POST["txtNombre"];
    $dni=$_POST ["txtDni"];
    $telefono=$_POST["txtTelefono"];
    $edad=$_POST["txtEdad"];

    $aClientes[]= array("nombre"=>$nombre, 
    "dni"=>$dni,
    "telefono"=>$telefono,
    "edad"=>$edad);
};
if(isset($_POST["btnEliminar"])){
    session_destroy();
    $aClientes=array();
}

if(isset($_GET["pos"])){

    $pos=$_GET["pos"];

    unset($aClientes[$pos]);

    $_SESSION["ListadoClientes"]=$aClientes;
    header("location:clientes_session.php");
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="https//cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Listado de clientes </h1>
            </div>
        </div>
    <div class="row">
        <div class="col-3" offset-1 me-5>
            <form action="" method="$_POST" class="form">
                <label for="txtNombre">Nombre:</label>
                <input type="text" name="txtNombre" class="form-control my-2" placeholder="Ingresar">
            
                <label for="txtDni">DNI:</label>
                <input type="text" name="txtDni" class="form-control my-2" >
                
                <label for="txtTelefono">Telefono:</label>
                <input type="tel" name="txtTelefono" class="form-control my-2" >

                <label for="txtEdad">Edad:</label>
                <input type="text" name="txtEdad" class="form-control my-2">

                <button type="submit" name="btnEnviar" class="btn bg-primary text-white">Enviar</button>
                <button type="submit" name="btnEliminar" class="btn bg-danger text-white">Eliminar</button>
            </form>
        </div>
        <div class="col-6 ms-5">
          <table class="table table-hover shadow border">
            <thead>
                <th>Nombre:</th>
                <th>DNI:</th>
                <th>Telefono:</th>
                <th>Edad:</th>
            </thead>
            <tbody>
                <?php foreach ($aClientes as $pos=> $cliente): ?>
                <tr>
                    <td><?php echo $cliente ["nombre"]; ?></td>
                    <td><?php echo $cliente ["dni"]; ?></td>
                    <td><?php echo $cliente ["telefono"]; ?></td>
                    <td><?php echo $cliente ["edad"]; ?></td>
                    <td> <a href="clientes_session.php?pos=<?php echo $pos; ?>"><i class="bi bi-trash"></a></td>
                </tr>
                <?php endforeach;?>
            </tbody>
          </table>
        </div>
    </div>
    </div>
</body>
</html>