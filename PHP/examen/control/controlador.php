<?php
require("./modelo/funciones.php");

session_start();

define("USU", "./usuarios/");

$vistas="menu.php";

if (isset($_GET['accion'])) {
    
    switch($_GET['accion']){

        case 'Entrar':
            // Recogemos los datos de usuario y de la clave
            $login=$_GET['usuario'];
            $clave=existe($login, USU."usuarios.ini");

            if ($login ==="" || $clave ==="") {
                $mensaje="Debe rellenar usuario y contraseña";
                $vista="menu.php";
            }else{
                if ($clave==$_GET["clave"]&&$clave!==null) {
                    $_SESSION['usuario']=$login;
                    $mensaje="Inicio de sesión con éxito.";
                    $vistas="sesion.php";
                }else{
                    $mensaje="El usuario no existe";
                    $vista="menu.php";
                }
            }
            break;


        case 'Registrarse':
            $login = $_GET["usuario"];
            $clave = $_GET["clave"];

            if ($login === "" || $clave === "") {
                $mensaje = "Debes rellenar el usuario y la contraseña.";
                $vista = "menu.php";
            } else {
                $nuevoUsuario = existe($login, USU . "usuarios.ini");

                if ($nuevoUsuario === null) {
                    if (registrar($login, $clave, USU . "usuarios.ini") && crearDirectorios($login)) {
                        $mensaje = "Usuario registrado con éxito.";
                        $vista = "sesion.php";
                    } else {
                        $mensaje = "No se ha podido guardar el usuario.";
                        $vista = "menu.php";
                    }
                } else {
                    $mensaje = "Este usuario ya ha sido registrado.";
                    $vista = "menu.php";
                }
            }
            break;


            case "cerrarSesion":
                session_unset();
                session_destroy();
                $mensaje = "Sesión cerrada con éxito";
                $vista = "menu.php";
                break;


            case 'recibidos':
            $recibidos = verContenido(USU, $_SESSION['usuario'], "recibidos.txt");
            $vista = "recibidos.php";
            break;

            case 'enviados':
                $contenido=file_get_contents(USU.$_SESSION['usuario']."/enviados.txt");
                $recibidos = verContenido(USU, $_SESSION['usuario'], $contenido);
                $vista = "enviados.php";
            break;

    }
}

?>