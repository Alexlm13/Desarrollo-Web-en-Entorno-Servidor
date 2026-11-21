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
            $pedidos=leerPedidos(PED);
            $vista='pedidos.php';

            break;

        case 'nuevopedido':
            $clientes=leerIni(CLI."clientes.ini");
            $vista='nuevopedido.php';
            
            break;
        
        case 'detallepedido':
            // leemos los productos
            $productos=leerProductos(PRO);
            //recogemos fecha y cliente
            $fecha=$_GET['fecha'];
            $cliente=$_GET['cliente'];

            // creamos el pedido
            if (isset($_SESSION['pedido'])){
                // añadimos un nuevo producto a la cesta
                // Obtenemos el indice del producto
                $i=$_GET["producto"];
                // A partir del indice obtenemos el nombre y el precio
                $nombreProducto=$productos[$i]["nombre"];
                $precio=$productos[$i]["precio"];
                // Obtenemos la cantidad
                $cantidad= $_GET['cantidad'];
                // creamos la linea detalle
                $lineaDetalle=["producto"=>$nombreProducto,"precio"=>$precio, "cantidad"=>$cantidad];

                //Y la añadimos al pedido concretamente al detalle
                array_push($_SESSION["pedido"]["detallePedido"], $lineaDetalle);
            }else{
                $_SESSION['pedido']=[];
                $_SESSION['pedido']['fecha']=$fecha;
                $_SESSION['pedido']['cliente']=$cliente;
                $_SESSION['pedido']['detallepedido']=[];
            }
            
            $vista='detallepedido.php';
            break;

        case 'anular':
                session_unset();
                session_abort();
                $vista="pedidos.php";
            break;
        case 'anular':
                session_unset();
                session_abort();
                $vista="pedidos.php";
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

        case'imprimirFichero':
            $fichero=$_GET['fichero'];
            imprimir($fichero);
            break;
    }
}