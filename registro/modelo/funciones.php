<?php

function existe($login, $fichero){
    //recogemos los usuarios del fichero clientes.ini
    $usuarios=parse_ini_file($fichero);

    //mira si los logins del array usuarios existen y en lo metemos en la variable ok
    $ok=array_key_exists($login, $usuarios);

    //preguntamos si exiten esos login
    if ($ok) {
        $clave=$usuarios["$login"]; //en caso de que existan guardamos ese valor en la variable clave que será la contraseña del usuario.
    }else{
        $clave=null; //Si no existe la clave tampoco.
    }
    return $clave; //Devolvemos la clave.
    
}

function registrar($login, $clave,$nombre_fichero){

    $ok=false; //suponemos que algo va a ir mal.
    $fichero=fopen($nombre_fichero, "a"); //intentamos abrir el fichero

    if ($fichero) {
        $linea="$login=$clave".PHP_EOL; //Le damos a una variable el valor de usuario=contraseña para que se vaya escribiendo en una nueva linea
        $ok=fwrite($fichero, $linea); //Escribimos en el fichero clientes.ini la linea de usuario=contraseña
        fclose($fichero); //Cerramos el fichero.
    }
    return $ok;
}

function crearDirectorios($login){
    $directorio=USU.$login;

    return mkdir("$directorio/recibidos", 0777, true) && mkdir("$directorio/enviados", 0777, true);
}

?>