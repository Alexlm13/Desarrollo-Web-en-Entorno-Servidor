<?php

function existe($usuario, $ruta){
    
    $arUsuarios=parse_ini_file($ruta);

    $ok=array_key_exists($usuario, $arUsuarios);

    if ($ok) {
        return $valor=$arUsuarios["$usuario"]; 
    }else{
        return null;
    }
}

function registra($usuario, $pass, $ruta){

    $ok=false;
    $fichero=fopen($ruta."usuarios.ini","a");

    if ($fichero) {
        $linea="$usuario=$pass".PHP_EOL;
        $ok=fwrite($fichero, $linea);
        $ok=fclose($fichero);
    }

    if ($ok) {
        return mkdir($ruta.$usuario,0777);
    }

    return $ok;
}

function guardarFichero($ruta,$archivo,$contenido){
    return file_put_contents($ruta."/".$archivo, $contenido,);
}


function muestraFichero($ruta){
    return scandir($ruta);
}

function leerFichero($ruta){
    return file_get_contents($ruta);
}
?>