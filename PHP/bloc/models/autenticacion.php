<?php

function existe($login, $fichero){
    
    // Cargamos el fichero segun el valor del parametro $fichero
    $usuarios = parse_ini_file($fichero);
    // Comprobamos si existe el fichero
    $ok = array_key_exists($login, $usuarios);

    // Si existe
    if ($ok) {
        // Guardamos el valor de esa clave
        $clave = $usuarios["$login"];
    } else {
        // En caso contrario guardamos el valor null
        return null;
    }
    return $clave;
}


function registrar($login, $clave, $nombre_fichero){
    
    $ok=false; // presuponemos que algo va a ir mal
    
    // Intentamos abrir el fichero en modo añadir
    $fichero=fopen($nombre_fichero, "a");
    
    if ($fichero) { // es igual que preguntar $firecho!=null, es decir, se ha podido abrir
        $linea= PHP_EOL."$login=$clave"; // La linea de texto que quiero escribir
        $ok=fwrite($fichero, $linea);
        $ok=fclose($fichero);
        $ok=true;

    }
    // Devolvemos el código de error: false si algo ha ido mal o tue si todo ha ido bien
    return $ok;
}