<?php
require ('./modelo/funciones.php');
$vista="clientes.php";

if (isset($_GET["accion"])) {
        switch ($_GET['accion']) {
            case 'clientes':
                $clientes=leerIni('./datos/clientes/clientes.ini');
                if (!$clientes) {
                    $mensaje="No se puede leer el fichero de clientes";
                    $color="danger";
                    $clientes=[];
                }
                $vista;
                break;
            
            case 'nuevocliente':
                $vista="nuevocliente.php";
                break;
            
            case 'productos':
                $vista="productos.php";
                $productos=leerProductos("./datos/productos");

                break;

            case 'nuevoproducto':
                $vista="nuevoproducto.php";
                break;
            
            case 'pedidos':
                $vista="pedidos.php";
                break;

            case 'nuevopedido':
                $vista="nuevopedido.php";
                break;
        }
    }








?>