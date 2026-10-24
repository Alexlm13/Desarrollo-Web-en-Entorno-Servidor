<?php
require("./modelo/funciones.php");

session_start();

define("USU", "./datos/usuarios/");
$vista = "inicio.php";

if (isset($_GET['accion'])) {

    

    switch ($_GET['accion']) {
        case 'acceso':
            $login = $_GET["login"];
            $clave = existe($login, USU."usuarios.ini");

            if ($login === "" || $clave === "") {
                $mensaje = "Debes rellenar el usuario y la contraseña.";
                $color = "danger";
                $vista = "inicio.php";
            } else {
                if ($clave == $_GET['clave'] && $clave !== null) {
                    $_SESSION['usuario'] = $login;
                    $mensaje = "Inicio de sesión con éxito";
                    $color = "success";
                    $vista = "sesion.php";
                } else {
                    $mensaje = "El usuario introducido no existe";
                    $color = "danger";
                    $vista = "inicio.php";
                }
            }
            break;

        case 'registro':
            $vista = "registro.php";
            break;

        case 'registroNuevoUsuario':
            $login = $_GET["login"];
            $clave = $_GET["clave"];

            if ($login === "" || $clave === "") {
                $mensaje = "Debes rellenar el usuario y la contraseña.";
                $color = "danger";
                $vista = "registro.php";
            } else {
                $nuevoUsuario = existe($login, USU."usuarios.ini");

                if ($nuevoUsuario === null) {
                    if (registrar($login, $clave, USU."usuarios.ini") && crearDirectorios($login)) {
                        $mensaje = "Usuario registrado con éxito.";
                        $color = "success";
                        $vista = "inicio.php";
                    } else {
                        $mensaje = "No se ha podido guardar el usuario.";
                        $color = "danger";
                        $vista = "registro.php";
                    }
                } else {
                    $mensaje = "Este usuario ya ha sido registrado.";
                    $color = "danger";
                    $vista = "registro.php";
                }
            }
            break;

        case 'volver':
            $vista="inicio.php";
            break;

        case "cerrarSesion":
            session_unset();
            session_destroy();
            $mensaje="Sesión cerrada con éxito";
            $color="success";
            $vista="inicio.php";
            break;
    }
}
