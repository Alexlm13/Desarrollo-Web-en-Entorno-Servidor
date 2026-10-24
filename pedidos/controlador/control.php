<?php
session_start();
require('./modelo/funciones.php');

$vista="clientes.php";
define("PRO","./datos/productos/");
define("CLI", "./datos/clientes/");
define("CAT","./datos/categorias/");
define("PED", "./datos/pedidos/");

if(isset($_GET['accion'])){

    switch($_GET['accion']){
        case 'clientes':
            $clientes=leerIni(CLI.'clientes.ini');
            if(!$clientes){
                $mensaje="No se ha podido leer el fichero de clientes";
                $color="warning";
                $clientes=[];
            }
            $vista;
            break;

        case 'nuevocliente':
            $vista='nuevocliente.php';
            break;

        case 'productos':
            $productos=leerProductos(PRO);
            $categorias=leerIni(CAT.'categorias.ini');
            $vista='productos.php';
            break;

        case 'nuevoproducto':
            $vista='nuevoproducto.php';

            $productos=leerProductos(PRO);
            $categorias=leerIni(CAT.'categorias.ini');
            break;

        case 'pedidos':
            $vista='pedidos.php';

            break;

        case 'nuevopedido':
            $vista='nuevopedido.php';
            $clientes=leerIni(CLI."clientes.ini");
            break;
        
        case 'detallepedido':
            $vista='detallepedido.php';
            $productos=leerProductos(PRO);
            break;

        case 'guardarproducto':
            $nombre=ltrim(rtrim($_GET["nombre"]));
            $precio=$_GET["precio"];
            $categoria=$_GET["categoria"];
            $ok=guardarProducto($nombre,$precio,$categoria,PRO);
            $categorias=leerIni(CAT.'categorias.ini');
            if(!$ok){
                $mensaje="No se ha podido guardar el producto";
                $color="danger";
                $vista='nuevoproducto.php';
            }else{
                $mensaje="El producto se ha guardado correctamente";
                $color="success";
                $productos=leerProductos(PRO);
                
                $vista="productos.php";
            }
            break;

        case 'eliminarproducto':
            $ruta=PRO.$_GET['fichero'].".txt";
            $ok=unlink($ruta);
            if ($ok) {
                $mensaje="El producto se ha eliminado correctamente";
                $color="success";
            }else{
                $mensaje="El producto no ha podido ser eliminado";
                $color="danger";
            }
            //$mensaje="$mensaje $ruta";
            $vistas="productos.php";
            $categorias=leerIni(CAT.'categorias.ini');
            $productos=leerProductos(PRO);
            break;
    }
}