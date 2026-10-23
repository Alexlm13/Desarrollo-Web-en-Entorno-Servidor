<?php

function leerIni($ruta){
    $datos=parse_ini_file($ruta);
    return $datos;
}

function leerProductos($ruta){
    // productos es un array numerico
    $productos=[];
    // leemos el directorio
    $ficheros=scandir($ruta);
    // recorremos cada fichero del directorio
    foreach ($ficheros as $fichero) {
        // si no es el directorio raiz ni el directorio padre
        if($fichero!="." && $fichero!=".."){
            /* leemos los datos del producto obteniendo un
            array asociativo con los datos del producto */
            $producto=leerProducto("$ruta/$fichero");
            // añadimos el producto al array del producto
            array_push($productos, $producto);
        }
    }
    return $productos;
}

function leerProducto($fichero){
    $producto=[];
    $f=fopen("$fichero", "r");
    if($f){
        // Leemos la primera linea que es el nombre
        $nombre=fgets($f);
        $producto['nombre']=$nombre;
        // Leemos la 2ª linea que es el precio
        $precio=fgets($f);
        $producto["precio"]=$precio;
        // Leemos el identificador de la categoria
        /* llamamos a una funcion a la que le pasamos 
        el identificador y nos devuelve la categoria*/
        $idCategoria=fgets($f);
        $producto["categoria"]=$idCategoria;
        fclose($f);
    }
    return $producto;
}

function guardarProducto($nombre, $precio, $categoria, $ruta){
    // Suponemos que va a haber error
    $ok=false;
    /* Creamos la ruta completa con la ruta al directorio más el nombre
    del fichero con la extension .txt*/
    $ruta=$ruta.$nombre.".txt";
    
    if(!file_exists($ruta)){
        $fichero=fopen($ruta, "w");
        if ($fichero) {
            fwrite($fichero, $nombre.PHP_EOL);
            fwrite($fichero, $precio.PHP_EOL);
            fwrite($fichero, $categoria);
            fclose($fichero);
            $ok=true;
        }
    }
    return $ok;
}
?>