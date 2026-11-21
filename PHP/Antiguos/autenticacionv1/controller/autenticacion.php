<?php
// Inicializamos la sesion
session_start();
require('.//models//funciones.php');
// comprobamos si se nos ha enviado el formulario
if (isset($_GET["accion"])) {
            // Recogemos el login
            $login=$_GET["login"];
    // preguntamos por el boton que ha sido pulsado
    switch ($_GET["accion"]) {
        // si se trata de acceso
        case "acceso":
            // 3. comprobamos si existe el usuario
            $clave= existe($login, ".//usuarios//usuarios.ini");
    
            // preguntamos si coinciden las claves
            if ($clave== $_GET["clave"]) {
                // lo guardamos en la sesión
                $_SESSION["usuario"] = $login;
                // Y emitimos un mensaje
                $mensaje = "Usuario correcto";
                $tipo = "success";
            } else {
                $mensaje = "Usuario incorrecto";
                $tipo = "danger";
            }

            break;

        case "registro":

            // Preguntamos si existe
            $clave=existe($login,".//usuarios//usuarios.ini");
            // Si existe, es decir, $clave es distinto de null
            if($clave!=null){
                $mensaje="Ya existe un usuario con ese mismo login";
                $tipo="danger";
            }else{
                $ok=registrar($login, $_GET['clave'], ".//usuarios//usuarios.ini");
                // Si ok es false es que ha habido un error y tenemos que anunciarlo
                if (!$ok) {
                    $mensaje="No ha sido posible registrar el usuario";
                    $tipo="danger";
                }else{
                    $mensaje= "El usuario ha sido registrado con exito";
                    $tipo="success";
                }
            }
            break;
    }
}
?>