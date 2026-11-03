<?php

//He recibido datos a través del formulario o la url?
if (isset($_GET['edad'])) {
    //en caso afirmativo guardo los datos en otra variable
    $edad = $_GET['edad'];
    // Y trabajo con esa variable
    if ($edad < 18) {
        $mensaje = "Eres menor de edad";
    } else {
        $mensaje = "Eres mayor de edad";
    }
} else {
    $mensaje = "No hay datos que procesar";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntar edad</title>
</head>
<body>
    <h3>
        <?php echo $mensaje; ?>
    </h3>
    <form action="">
        <label>Escriba su edad</label>
        <input type="number" name="edad"/>
        <input type="submit" value="Enviar"/>
    </form>

    
    
</body>
</html>