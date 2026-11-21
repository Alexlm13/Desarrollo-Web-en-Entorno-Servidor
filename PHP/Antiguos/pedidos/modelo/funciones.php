<?php
require 'vendor/autoload.php'; // carga dompdf
use Dompdf\Dompdf;


function leerIni($ruta)
{
    $datos = parse_ini_file($ruta);
    return $datos;
}

function leerProductos($ruta)
{
    // productos es un array numerico
    $productos = [];
    // leemos el directorio
    $ficheros = scandir($ruta);
    // recorremos cada fichero del directorio
    foreach ($ficheros as $fichero) {
        // si no es el directorio raiz ni el directorio padre
        if ($fichero != "." && $fichero != "..") {
            /* leemos los datos del producto obteniendo un
            array asociativo con los datos del producto */
            $producto = leerProducto("$ruta/$fichero");
            // añadimos el producto al array del producto
            array_push($productos, $producto);
        }
    }
    return $productos;
}

function leerProducto($fichero)
{
    $producto = [];
    $f = fopen("$fichero", "r");
    if ($f) {
        // Leemos la primera linea que es el nombre
        $nombre = fgets($f);
        $producto['nombre'] = $nombre;
        // Leemos la 2ª linea que es el precio
        $precio = fgets($f);
        $producto["precio"] = $precio;
        // Leemos el identificador de la categoria
        /* llamamos a una funcion a la que le pasamos 
        el identificador y nos devuelve la categoria*/
        $idCategoria = fgets($f);
        $producto["categoria"] = $idCategoria;
        fclose($f);
    }
    return $producto;
}

function guardarProducto($nombre, $precio, $categoria, $ruta)
{
    // Suponemos que va a haber error
    $ok = false;
    /* Creamos la ruta completa con la ruta al directorio más el nombre
    del fichero con la extension .txt*/
    $ruta = $ruta . $nombre . ".txt";

    if (!file_exists($ruta)) {
        $fichero = fopen($ruta, "w");
        if ($fichero) {
            fwrite($fichero, $nombre . PHP_EOL);
            fwrite($fichero, $precio . PHP_EOL);
            fwrite($fichero, $categoria);
            fclose($fichero);
            $ok = true;
        }
    }
    return $ok;
}


function guardarPedido($pedido)
{
    $clientes = leerIni(CLI . "clientes.ini");

    $nombreCliente = $clientes[$pedido['cliente']];
    $nombreFichero = microtime() . ".txt";

    $f = fopen(PED . $nombreFichero, "w");

    if ($f) {
        fwrite($f, $pedido["fecha"] . PHP_EOL);
        fwrite($f, $nombreCliente . PHP_EOL);
        $total = 0;
        foreach ($pedido["detallePedido"] as $linea) {
            $subtotal = $linea["cantidad"] * $linea["precio"];
            $total = $total + $subtotal;
            $lineaDetalle = $linea["producto"] . ":" . $linea["cantidad"] . ":" . $subtotal;
            fwrite($f, $lineaDetalle . PHP_EOL);
        }
        fwrite($f, "TOTAL=$total");
        fclose($f);
        $ok = true;
    }
    return true;
}


function leerPedidos($ruta)
{
    $pedidos = [];
    $pedidos = scandir($ruta);
    return $pedidos;
}


function imprimir($fichero)
{
    $dompdf = new Dompdf();
    $f = fopen(PED . $fichero, "r");
    if ($f) {
        $fecha = fgets($f);
        $cliente = fgets($f);
        fclose($f);
        $html = "<h4>$fecha</h4><h4>$cliente</h4>";
        $html="<table>";
        while(!feof($f)){
            $linea=fgets($f);
            $linea=explode(":", $linea);
            $html=$html."<tr><td>$linea[0]</td><td>$linea[1]</td><td>$linea[2]</td></tr>";
        }
        $html="</table>";
        //cargamos el html
        $dompdf->loadHtml($html);

        // (Opcional) Configurar tamaño y orientación
        $dompdf->setPaper('A4', 'portrait');

        // Renderizar el PDF
        $dompdf->render();

        // Enviar al navegador
        $dompdf->stream("factura.pdf", ["Attachment" => false]); // false = mostrar, true = descargar
    }
}
