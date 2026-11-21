<?php

session_start();

require('./modelo/funciones.php');

$vista="login.php";

$usuario=$_SESSION['usuario'] ?? null;

$mensaje="";

//$saldo=$usuario !== null ? obtenerSaldo($usuario) : 0;

if (isset($_GET['accion'])) {
    switch ($_GET['accion']) {
        case 'Entrar':
            
            $nombre=$_GET['usuario'];
            $clave=$_GET['clave'];
            $baseDatos=leerBaseDeDatos();

            if($nombre&&$clave){
                if (isset($baseDatos[$nombre]) && $baseDatos[$nombre]===$clave) {
                    $_SESSION['usuario']=$nombre;
                    $usuario=$nombre;
                    $mensaje="Bienvenido, $usuario";
                }else{
                    $mensaje="Usuario o clave incorrectos";
                }
            }else{
                $mensaje="Debe introducir un nombre de usuario y clave";
            }

            $vista="inicio.php";

            break;
        
        case "Registrarse":
            
            break;

        case "CerrarSesion":
            session_unset();
            session_destroy();

            $usuario=null;
            $vista="login.php";
            break;
    }
}
?>