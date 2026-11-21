<?php
// Iniciamos la sesion
session_start();
//comprobamos si hemos recibido el formulario
if (isset($_GET["accion"])) {
    // cogemos el valor introducido por el usuario
    $valor = $_GET["valor"];
    // Añado el array "valores" de la sesion el dato que hemos recogido.
    array_push($_SESSION["valores"], $valor);
    // y lo mostramos
    // var_dump($_SESSION["valores"]);
} else {
    /*La primera vez que accedemos a la página creamos el
    array 'valores' dentro del array superglobal SESSION */
    $_SESSION["valores"] = array(); // o $_SESSION["valores"]=[];
}


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <p>
            <label>Escribe un valor</label>
            <input type="text" name="valor"></input>
            <button type="submit" name="accion" value="guardar">Guardar y añadir otro valor</button>
        </p>
        <div>
            <ul>
                <?php foreach ($_SESSION["valores"] as $valor) : ?>
                    <li><?php echo $valor ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </form>
</body>

</html>