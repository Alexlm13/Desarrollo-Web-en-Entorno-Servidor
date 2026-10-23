<?php

function guardar($nombre_archivo, $texto) {

    $ruta = "./usuarios/".$_SESSION['usuario'].SP.$nombre_archivo;

    $ok = file_put_contents($ruta, $texto);

    return $ok;
}

function abrir($nombre_archivo) {

    $ruta = "./usuarios/".$_SESSION['usuario'].SP.$nombre_archivo;  
       
    $texto = file_get_contents($ruta);

    return $texto;
}


?>