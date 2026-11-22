<?php 

function existe($usuario, $ruta){
    $arUsuarios=parse_ini_file($ruta);

    $ok=array_key_exists($usuario, $arUsuarios);
    
    if($ok){
        return $pass=$arUsuarios["$usuario"];
    }else{
        return null;
    }
}


function registra($usuario, $pass, $ruta){
    $fichero=fopen($ruta,'a');
    $ok=false;

    if ($fichero) {
        $ok=fwrite($fichero,"$usuario=$pass".PHP_EOL);
        $ok=fclose($fichero);
    }

    return $ok;
}

function creaFicheros($usuario){
    $directorio=mkdir("./usuarios/".$usuario, 0777);

    if ($directorio) {
        file_put_contents("./usuarios/".$usuario."/saldo.txt",0);
        file_put_contents("./usuarios/".$usuario."/enviados.txt","");
        file_put_contents("./usuarios/".$usuario."/recibidos.txt","");
    }else{
        return null;
    }
}

function obtenerSaldo($sesion){
    return file_get_contents("./usuarios/".$sesion."/saldo.txt");
}

function movimientos($sesion, $archivo){
    $ruta="./usuarios/".$sesion."/".$archivo;
    return file($ruta,FILE_IGNORE_NEW_LINES);
}

function listaUsuarios(){
    $usuarios = parse_ini_file("./usuarios/usuarios.ini");

    return array_keys($usuarios);
}

function enviarDinero($usuario, $dinero){
    $ruta="./usuarios/".$_SESSION['usuario']."/enviados.txt";
    
    return file_put_contents($ruta, date('d:m:Y H:i:s').", ".$usuario.", ".$dinero." €".PHP_EOL, FILE_APPEND);
}

function recibirDinero($destino, $dinero){
    $ruta="./usuarios/".$destino."/recibidos.txt";
    
    return file_put_contents($ruta, date('d:m:Y H:i:s').", ".$_SESSION['usuario'].", ".$dinero." €".PHP_EOL, FILE_APPEND);
}

function actualizaSaldo($dinero){
    $saldo=file_get_contents("./usuarios/".$_SESSION['usuario']."/saldo.txt");
    $saldo=$saldo-$dinero;
    return file_put_contents("./usuarios/".$_SESSION['usuario']."/saldo.txt", $saldo);
}

function actualizaSuSaldo($dinero){
    $saldo=file_get_contents("./usuarios/".$_GET['destino']."/saldo.txt");
    $saldo=$saldo+$dinero;
    return file_put_contents("./usuarios/".$_GET['destino']."/saldo.txt", $saldo);
}
?>