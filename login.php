<?php

ini_set('display_errors',1);
ini_set('display_starup_errors',1);
error_reporting(E_ALL);

session_start();

if($_POST){
    $usuario= trim($_REQUEST["txtUsuario"]);
    $clave= trim($_REQUEST["txtClave"]);

    if($usuario=="admin" && $clave=="admin123"){
        $_SESSION["nombre"] = "Sandra";
        header("Location: index.php");
    } else {
        $msg ="Usuario o clave incorrecto";
    }
}
?>