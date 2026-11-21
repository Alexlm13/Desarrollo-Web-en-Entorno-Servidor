<?php


require(".//models//bloc.php");

// inicializo variable
$archivo = "";
$texto = "";

if (isset($_GET['accion'])) {
    // Recogemos el nombre del archivo
    $archivo = $_GET['archivo'];
    switch ($_GET['accion']) {
        case 'guardar':
            // Recogemos el texto
            $texto = $_GET['texto'];
            $ok = guardar($archivo, $texto);
            $vista = "bloc.php";
            break;

        case 'abrir':
            // Establecemos la ruta
            $ruta = "./usuarios/" . SP . $_SESSION["usuario"];
            // Leemos los ficheros
            $ficheros = scandir($ruta);
            $vista = "ficheros.php";
            break;

        case 'seleccionar':
            $archivo = $_GET["archivo"];

            $texto = abrir($archivo);
            if (!$texto) { // Es igual que preguntar si texto es igual a false
                $mensaje = "El archivo $archivo no existe";
                $color = "danger";
            }

            $vista="bloc.php";
            break;
        
        case 'carpeta':
            // Cogemos el nombre de la carpeta que queremos crear
            $carpeta=$_GET["carpeta"];
            // Componemos la ruta donde se va a crear
            $ruta="./usuarios/".$_SESSION["usuario"].SP.$carpeta;
            // Creamos la carpeta y recogemos el codigo de error
            $ok=mkdir($ruta, 0777);
            if(!$ok){
                $mensaje="No se pudo crear la carpeta";
                $color="danger";
            }
            // Volvemos a leer el directorio
            $ficheros=scandir("./usuarios/".$_SESSION["usuario"]);
            $vista="ficheros.php";
            break;

        case "cerrar":
            // Eliminamos todas las variables
            session_unset();
            // Eliminamos la sesión
            session_destroy();
            // Direccionamos a index.php
            $vista = "autenticacion.php";
            break;
    }
}
