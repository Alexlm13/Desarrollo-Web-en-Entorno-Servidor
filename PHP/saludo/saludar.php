<?php  
//Creamos una variable con el nombre $nombre_apellidos donde recogermos los datos del formulario

/*
Si el metodo indicado en el formulario es GET tendré que utilizar $_GET['']
Si el metodo indicado en el formulario es POST tendré que utilizar $_POST['']

'..' representan el nombre que le hemos asignado al control del formulario
a traves de la propiedad name

*/

//$nombre_apellidos= $_POST['nombre_apellidos']
$nombre_apellidos = $_GET['nombre_apellidos'];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php 
            echo "Hola... ".$nombre_apellidos." !!";
        ?>
    </h1>
</body>
</html>