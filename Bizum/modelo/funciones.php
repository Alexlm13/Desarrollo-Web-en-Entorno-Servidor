<?php

function leerBaseDeDatos(){
    $ruta='./usuarios/usuarios.ini';
    
    if(!file_exists($ruta)){
        return[];
    }

    $usuarios=parse_ini_file($ruta);

    return $usuarios === false ? [] : $usuarios;
}

?>