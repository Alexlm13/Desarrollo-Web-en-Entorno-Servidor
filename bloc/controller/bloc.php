<?php

require(".//models//bloc.php");
// Inicializo variables
$archivo = "";
$texto = "";

if (isset($_GET["accion"])) {
    // Recogemos el nombre del archivo
    $archivo = $_GET["archivo"];
    switch ($_GET["accion"]) {
        case "guardar":
            // Recogemos el texto
            $texto = $_GET["texto"];
            $ok = guardar($archivo, $texto); 
            $vista = "bloc.php";            
            break;

        case "abrir": 
            // Establecemos la ruta
            $ruta = "./usuarios/".SP.$_SESSION["usuario"];
            // Leemos los ficheros
            $ficheros = scandir($ruta);
            $vista = "ficheros.php";
            break;

        case "seleccionar":    
            $archivo = $_GET["archivo"];
            $texto = abrir($archivo);
            if (!$texto) { // es igual que preguntar si texto es igual a false
                $mensaje = "El archivo $archivo no existe";
                $color = "danger"; 
            }
            $vista ="bloc.php";
            break;
            

        case "cerrar": 
            // Eliminamos todas las variables de sesión
            session_unset();
            // Eliminamos la sesión
            session_destroy();
            // Direccionamos a index.php
            $vista = "autenticacion.php";
            break;
            
    }
}


?>