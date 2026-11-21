<?php
session_start();

require("./modelo/funciones.php");

$vista="inicio.html";

if (isset($_GET['accion'])) {
    switch ($_GET['accion']) {
        case 'acceder':
            $valor=existe($_GET['usuario'], "./usuarios/usuarios.ini");
            if ($valor===$_GET['pass']) {
                $_SESSION['usuario'] = $_GET['usuario'];
                $vista="menu.php";
            }else{
                $mensaje="Usuario o contraseña erronea";
                $vista="inicio.html";
            }
            break;

        case 'registro':
            $valor=existe($_GET['usuario'],"./usuarios/usuarios.ini");

            if($valor) {
                $mensaje="El usuario ya existe";
                $vista="inicio.html";
            }else{
                $ok=registra($_GET['usuario'], $_GET['pass'],"./usuarios/");
                
                if($ok) {
                    $mensaje="El usuario ha sido registrado con exito";
                    $vista="inicio.html";
                }else{
                    $mensaje="No se pudo registrar el usuario";
                    $vista="inicio.html";
                }
            }
            break;

        case 'guardarFichero':
            $archivo=$_GET["archivo"];
            $contenido=$_GET["textArea"];
            $ruta="./usuarios/".$_SESSION['usuario'];
            $ok=guardarFichero($ruta, $archivo, $contenido);
            
            if ($ok) {
                $mensaje="Nota guardada correctamente.";
            }else{
                $mensaje="No se ha podido guardar la nota.";
            }
            
            $vista="menu.php";

            break;

        case 'abrirFicheros':
            $ruta="./usuarios/".$_SESSION['usuario']."/";
            $ficheros=muestraFichero($ruta);

            $vista="ficherosUsuario.php";
            break;

        case 'verContenido':
            $ruta="./usuarios/".$_SESSION['usuario']."/".$_GET['fichero'];
            if (isset($_GET['fichero'])) {
                $contenido=leerFichero($ruta);
                if (!$contenido) {
                    $mensaje="No existe dicho texto";
                }
                
                $vista="menu.php";
            }
        break;

        case 'cerrar':
            session_unset();
            session_destroy();
            $vista="inicio.html";
            break;
    }
}
?>