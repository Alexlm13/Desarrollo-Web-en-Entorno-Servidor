<?php
// Inicializamos la sesión
session_start();

// Incluimos las funciones
require('.//models//autenticacion.php');
// Definimos un alias para la constante DIRECTPOY_SEPARATOR
define("SP", DIRECTORY_SEPARATOR);
// Establecemos la vista por defecto
$vista = "autenticacion.php";


// Comprobamos si se nos ha enviado el formulario
if (isset($_GET["accion"])) {
     // Recogemos el login
    $login = $_GET["login"];

    // Preguntamos por el botón que ha sido pulsado
    switch ($_GET["accion"]) {
        // Si se trata de acceso
        case "acceso":          
            // Comprobamos si existe el usuario            
            $clave = existe($login, './/usuarios//usuarios.ini');
            // Preguntamos si coinciden las claves
            if ($clave == $_GET["clave"]) {
                // Lo guardamos en la sesión
                $_SESSION["usuario"] = $login;                
                /* Mostramos la vista (página) bloc.php */
                $vista = "bloc.php";                
            } else {
                $mensaje = "Usuario incorrecto";
                $color = "danger";                
            }
            break;

        case "registro":
            // Preguntamos si existe
            $clave = existe($login,".//usuarios//usuarios.ini");
            // si exite, es decir, $clave es distinto de null
            $color = "danger";
            if ($clave != null) {
                $mensaje = "Ya xiste un usuario con ese mismo login";                
            }else{                
                $ok = registrar($login, $_GET["clave"], ".//usuarios//usuarios.ini");
                // Si ok es false es que ha habido un error y tenemos que anunciarlo
                if (!$ok) {
                    $mensaje = "No ha sido posible registrar el usuario";
                }else{
                    $mensaje = "El usuario ha sido registrado con exíto";
                    $color = "success";
                }
            }
            break;
    }
}

?>