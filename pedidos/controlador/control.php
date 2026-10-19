<?php

$vista="clientes.php";

if (isset($_GET["accion"])) {
        switch ($_GET['accion']) {
            case 'clientes':
                $vista;
                break;
            
            case 'nuevocliente':
                $vista="nuevocliente.php";
                break;
            
            case 'productos':
                $vista="productos.php";
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