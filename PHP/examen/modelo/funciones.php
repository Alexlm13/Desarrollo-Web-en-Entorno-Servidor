<?php

function existe($login, $fichero){
    //recogemos los usuarios del fichero clientes.ini
    $usuarios=parse_ini_file($fichero);

    //mira si los logins del array usuarios existen y en lo metemos en la variable ok
    $ok=array_key_exists($login, $usuarios);

    //preguntamos si exiten esos login
    if ($ok) {
        //en caso de que existan guardamos ese valor en la variable clave que será la contraseña del usuario.
        $clave=$usuarios["$login"]; 
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
    $ok=false;

    if(!file_exists(USU.$login)){
        mkdir(USU, 0777);
    }
    
    $carpeta=USU.$login;
    if(mkdir($carpeta, 0777)){
        file_put_contents($carpeta."saldo.txt",0);
        file_put_contents($carpeta."recibidos.txt","");
        file_put_contents($carpeta."enviados.txt","");
        $ok=true;
    }
    return $ok;
}


function verContenido($ruta,$login, $txt){
    $ficheros=scandir($ruta.$login."/".$txt);
    $mensajes=[];

    if ($ficheros==false) {
        return $mensajes;
    }

    foreach ($ficheros as $fichero) {
        if ($fichero!== "." && $fichero !== "..") {
            $mensajes[]=$fichero;
        }
    }
    return $mensajes;
}
?>