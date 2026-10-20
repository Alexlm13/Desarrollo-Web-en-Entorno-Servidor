<?php 

function leerIni($ruta){
    $datos=parse_ini_file($ruta);
    return $datos;
}

function leerProductos($ruta){
    $productos=[];
    $ficheros=scandir($ruta);

    foreach($ficheros as $fichero){
        if($fichero!="." && $fichero!=".."){
            $producos=leerProducto($fichero);
            array_push($productos, $producto);
        }
    }
    return $productos;
}

function leerProducto($fichero){
    $producto=[];
    $f=fopen("./datos/productos/$fichero", "r");

    if ($f) {
        $nombre=fgets($f);
        $producto['nombre']=$nombre;
        $precio=fgets($f);
        $producto['precio']=$precio;
        $idCategoria=fgets($f);
        $producto["idCategoria"]=$idCategoria;
        fclose($f);
    }

    return $producto;
}
?>