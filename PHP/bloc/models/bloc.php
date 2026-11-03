<?php


    function guardar($nombre_archivo, $texto){
        $ruta="./usuarios/".$_SESSION['usuario']."/".$nombre_archivo;

        file_put_contents($nombre_archivo, $texto);

        return $ok;
    }

    function abrir($nombre_archivo){
        $ruta="./usuarios/".$_SESSION['usuario']."/".$nombre_archivo;    

        $texto=file_get_contents($ruta);

        return $texto;
    }
?>