<?php
// inicializamos la sesion
session_start();

require("..//models//bloc.php");

// inicializo variable
$archivo="";
$texto="";

if (isset($_GET['accion'])) {
    // Recogemos el nombre del archivo
    $archivo=$_GET['archivo'];
    switch ($_GET['accion']) {
        case 'guardar':
            // Recogemos el texto
            $texto=$_GET['texto'];
            $ok = guardar($archivo, $texto);
            break;

        case 'abrir':
            $texto=abrir($archivo);
            if(!$texto){ // Es igual que preguntar si texto es igual a false
                $mensaje= "El archivo $archivo no existe";
                $tipo="danger";
            }
            break;
        case "cerrar":
            // Eliminamos todas las variables
            session_unset();
            // Eliminamos la sesión
            session_destroy();
            // Direccionamos a index.php
            header("Location: ../index.php");
            break;
    }
}
?>