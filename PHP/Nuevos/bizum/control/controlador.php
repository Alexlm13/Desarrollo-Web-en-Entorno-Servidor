<?php
session_start();

require("./modelo/funciones.php");

$vista="inicioSesion.html";
$botones=false;


if (isset($_GET['accion'])) {
    switch ($_GET['accion']) {
        case 'Entrar':
            $ok=existe($_GET['usuario'], "./usuarios/usuarios.ini");
            if ($ok===$_GET["clave"]) {
                $_SESSION['usuario']=$_GET['usuario'];
                $_SESSION['saldoActual']=obtenerSaldo($_SESSION['usuario']);
                
                $vista="panelControl.php";
            }else{
                $mensaje="El usuario no existe.";
                $vista="inicioSesion.html";
            }
            break;
        
        case 'Registrarse':
            $valor=existe($_GET['usuario'], "./usuarios/usuarios.ini");
            if($valor){
                $mensaje="El usuario ya existe";
                $vista="inicioSesion.html";
            }else{
                $ok=registra($_GET['usuario'], $_GET['clave'], "./usuarios/usuarios.ini");
                
                if ($ok) {
                    creaFicheros($_GET['usuario']);
                    $mensaje="Usuario registrado con exito";
                    $vista="inicioSesion.html";
                }else{
                    $mensaje="Usuario no se ha podido registrar";
                    $vista="inicioSesion.html";
                }
            }
            break;

        case 'recibidos':
            $movimientos=movimientos($_SESSION['usuario'], "recibidos.txt");
            $vista="recibidos.php";
            $botones=true;
            break;

        case 'enviados':
            $movimientos=movimientos($_SESSION['usuario'], "enviados.txt");
            $vista="enviados.php";
            $botones=true;
            break;

        case 'enviar':
            $usuarios=array_values(array_diff(listaUsuarios(), [$_SESSION['usuario']]));
            $vista='enviar.php';
            break;

        case 'enviarBizum':
            $bizum=enviarDinero($_GET['destino'], $_GET['dinero']);
            $recibirBizum=recibirDinero($_GET['destino'], $_GET['dinero']);

            $actualizarSaldo=actualizaSaldo($_GET['dinero']);
            $actualizarSaldoDestino=actualizaSuSaldo($_GET['dinero']);

            $_SESSION['saldoActual']=obtenerSaldo($_SESSION['usuario']);

            $vista="panelControl.php";
            break;
        
        case 'cerrarSesion':
            session_unset();
            session_destroy();

            $vista="inicioSesion.html";
            break;
    }
}

?>