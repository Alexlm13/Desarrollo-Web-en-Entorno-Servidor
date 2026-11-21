<?php
// Abro la sesióm 
session_start();

// Constantes de las rutas 
define("PRO", "./datos/productos/");
define("CLI", "./datos/clientes/");
define("CAT", "./datos/categorias/");
define("PED", "./datos/pedidos/");

include "modelo/funciones.php";

$vista = "clientes.php";

if (isset($_GET['accion'])) {
    switch ($_GET['accion']) {
        case 'clientes':
            $clientes = leerIni("clientes");
            $vista = "clientes.php";
            break;
        case 'productos':
            $productos = leerProductos(PRO);
            $categorias = leerIni("categorias");
            $vista = "productos.php";
            break;
        case 'pedidos':
            $vista = "pedidos.php";
            $pedidos = leerPedidos(PED);
            break;
        case 'nuevoProducto':
            $vista = "nuevoProducto.php";
            $productos = leerProductos(PRO);
            $categorias = leerIni("categorias");
            break;
        case 'guardarProducto':
            // Cogemos los datos del producto 
            $nombre = ltrim(rtrim($_GET["nombre"]));
            $precio = $_GET["precio"];
            $categoria = $_GET["categoria"];
            $ok = guardarProducto($nombre, $precio, $categoria, PRO);
            $categorias = leerIni("categorias");
            if (!$ok) {
                $mensaje = "¡¡ No se ha podido guardar el producto !!";
                $color = "danger";
                $vista = "nuevoProducto.php";
            } else {
                $mensaje = "¡¡ El producto se ha guardado correctamente !!";
                $color = "success";
                $productos = leerProductos(PRO);
                $vista = "productos.php";
            }
            break;
        case 'eliminarProducto':
            $ruta = PRO . trim($_GET['nombreFichero']) . ".txt";
            $ok = unlink($ruta);

            if ($ok) {
                $mensaje = "EL producto se ha ido eliminado correctamente";
                $color = "success";
            } else {
                $mensaje = "¡¡ No se ha podido eliminar el producto !!";
                $color = "danger";
            }

            $productos = leerProductos(PRO);
            $categorias = leerIni("categorias");
            $vista = "productos.php";

            break;
        case 'nuevoPedido':
            $clientes = leerIni('clientes');
            $vista = 'nuevoPedido.php';
            break;
        case 'detallepedido':
            $vista = "detallePedido.php";
            $productos = leerProductos(PRO);
            // Si llega "cliente": vienes del botón Continuar, empieza el pedido
            if (isset($_GET['cliente'])) {
                $_SESSION['fecha'] = $_GET['fecha'];
                $_SESSION['cliente'] = $_GET['cliente'];
                $_SESSION['lineas'] = [];
            }
            // Si llega "producto": vienes de Añadir y continuar, añadimos una línea
            if (isset($_GET['producto'])) {
                $producto = $productos[$_GET['producto']]; // Almaceno el producto segun el indice del for en la vista
                $cantidad = $_GET['cantidad'];
                $precio = trim($producto['precio']);

                $_SESSION['lineas'][] = [
                    "nombre" => trim($producto['nombre']),
                    "cantidad" => $cantidad,
                    "subtotal" => $precio * $cantidad
                ];
            }
            $lineas = $_SESSION['lineas'] ?? [];
            // $total = 0;
            // foreach ($lineas as $linea) {
            //     $total += $linea['subtotal'];
            // }
            break;
        case 'anular':
            session_unset();
            session_destroy();
            $vista = "pedidos.php";
            break;

        case 'guardarpedido':
            //$ok = guardarPedido($lineas);
            $vista = "pedidos.php";
            break;
        case 'imprimirpedido':
            $fichero = imprimir();
            break;
    }
}
