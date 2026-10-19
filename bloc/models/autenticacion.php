<?php

function existe($login, $fichero) {

    // Cargamos el fichero según el valor del parámetro $fichero
    $usuarios = parse_ini_file($fichero);
    // Cormpobamos si existe la clave
    $ok = array_key_exists($login, $usuarios);
    // Si existe
    if ($ok) {
        // Guardamos el valor de esa clave 
        $clave = $usuarios["$login"];
    }else{
        // En caso contrario guardamos el valor null
        $clave = null;
    }

    return $clave;
}

function registrar($login ,$clave, $nombre_fichero) {

    $ok = false; // Presuponemos que algo va a ir mal

    // Intentamos abrir el fichero en modo añadir
    $fichero = fopen($nombre_fichero, "a");

    if ($fichero) { // es igual que preguntar if ($fichero != null), es decir, se ha podido abrir
        $linea =  PHP_EOL."$login=$clave"; // LA línea de texto que quiero escribir, por ejemplo: juan=h45a
        $ok = fwrite($fichero, $linea);
        $ok = fclose($fichero);        
    }
    // Devolvemos el código de error: False si algo ha ido mal o true si todo ha ido bien
    return $ok;

}

?>
