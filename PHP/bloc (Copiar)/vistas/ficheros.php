<?php
// Iniciamos la sesión
session_start();
// Construimos la ruta a la carpeta del usuario
$ruta = "../usuarios/" . $_SESSION['usuario'];
// Leemos la carpeta de usuarios
// scandir nos devuelve los ficheros y directorios de la carpeta del usuario
$ficheros = scandir($ruta);
// Mostramos los ficheros
// var_dump($ficheros);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <?php foreach ($ficheros as $f): ?>
            <tr>
                <td><?php echo $f ?></td>
                <td>
                    <form>
                        <button type="submit" name="accion" value="abrir">
                            Seleccionar fichero
                        </button>
                        <input type="hidden" name="fichero" value="<?php echo $f ?>" />
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>