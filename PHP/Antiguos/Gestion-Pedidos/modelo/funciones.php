<?php
require 'vendor/autoload.php'; // carga dompdf
use Dompdf\Dompdf;

function leerIni($nombre)
{
    $ruta = "datos/$nombre/$nombre.ini";

    if (!file_exists($ruta)) {
        return [];
    }

    return parse_ini_file($ruta);
}

function leerProductos($ruta)
{
    $productos = [];
    $ficheros = scandir($ruta);
    // Recorremos cada fichero del directorio 
    foreach ($ficheros as $fichero) {
        // Si no es el directorio raiz ni el direcorio padre ..
        if ($fichero != "." && $fichero != "..") {
            // Leemos los datos del producto obteniendo un array asociativo con los datos del producto
            $producto = leerProducto("$ruta/$fichero");
            // Añadimos el producto al array de producto
            array_push($productos, $producto);
        }
    }
    return $productos;
}

function leerProducto($fichero)
{
    $producto = [];
    $f = fopen($fichero, "r");
    if ($f) {
        // Leemos la primera linea que es el nombre 
        $nombre = fgets($f);
        $producto["nombre"] = $nombre;
        // Leemos la 2 linea que es el precio
        $precio = fgets($f);
        $producto["precio"] = $precio;
        // Leemos el identificador de la categoria
        $idCategoria = fgets($f);
        $producto["categoria"] = $idCategoria;


        fclose($f);
    }
    return $producto;
}

function leerProducto2($fichero)
{
    $producto = [];
    $f = fopen($fichero, "r");
    if ($f) {
        // Leemos la primera linea que es el nombre 
        while (!feof($f)) {
            $linea = fgets($f);
            array_push($producto, $linea);
        }
        fclose($f);
        return $producto;
    }
    return [];
}
// Si el fichero estuviera separado por comas
function leerProducto3($fichero)
{
    $producto = [];
    $f = fopen($fichero, "r");
    if ($f) {
        $linea = fgets($f);
        $producto = explode(",", $linea);
        fclose($f);

        return $producto;
    }
    return [];
}

function guardarProducto($nombre, $precio, $categoria, $ruta)
{
    // Suponemos que va a haber error
    $ok = false;

    // Creamos la ruta completa 
    $ruta = $ruta . $nombre . ".txt";

    // $ok = file_put_contents($ruta, "$nombre\n", "$precio\n", "$categoria\n");

    // Comprobamos si existe 
    if (!file_exists($ruta)) {
        $fichero = fopen($ruta, "w");
        if ($fichero) {
            // Grabamos los datos
            fwrite($fichero, $nombre . PHP_EOL);
            fwrite($fichero, $precio . PHP_EOL);
            fwrite($fichero, $categoria . PHP_EOL);

            fclose($fichero);
            $ok = true;
        }
    }

    return $ok;
}

function leerPedidos($ruta)
{
    $pedidos = [];
    $ficheros = scandir($ruta);
    // Recorremos cada fichero del directorio 
    foreach ($ficheros as $fichero) {
        // Si no es el directorio raiz ni el direcorio padre ..
        if ($fichero != "." && $fichero != "..") {
            // Leemos los datos del producto obteniendo un array asociativo con los datos del producto
            $pedido = leerPedido("$ruta/$fichero");
            // Añadimos el producto al array de producto
            array_push($pedidos, $pedido);
        }
    }
    return $pedidos;
}

function leerPedido($fichero)
{
    $pedido = [];
    $filas = file($fichero, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($filas) {
        $pedido["fichero"] = basename($fichero);
        $pedido["fecha"] = explode(" - ", $filas[0])[0];
        $pedido["nombreCliente"] = $filas[1];
        $pedido["total"] = explode(":", end($filas))[1];
    }
    return $pedido;
}

function guardarPedido($pedido)
{
    $cliente = leerIni('clientes');
    $nombreCliente = $clientes[$pedido["cliente"]];
    //$nombreFichero = 
}

function imprimir($fichero)
{
    $dompdf = new Dompdf();
    // Abrimos el fichero
    $f = fopen(PED . $fichero, "r");

    if ($f) {
        $fecha = fgets($f);
        $cliente = fgets($f);
        $html = "<h4>Fecha = $fecha</h4><h4>Cliente = $cliente</h4>";
        $html = $html."<table>";

        while (!feof($f)) {
            $linea = fgets($f);
            $linea = explode(":", $linea);
            $html = $html. "<tr><td>$linea[0]</td><td>$linea[1]</td><td>$linea[2]</td></tr>";
        }

        // Cargar el HTML
        $dompdf->loadHtml($html);
        // (Opcional) Configurar tamaño y orientación
        $dompdf->setPaper('A4', 'portrait');
        // Renderizar el PDF
        $dompdf->render();
        // Enviar al navegador
        $dompdf->stream("factura.pdf", ["Attachment" => false]); // false = mostrar, true = descargar

    }
}
