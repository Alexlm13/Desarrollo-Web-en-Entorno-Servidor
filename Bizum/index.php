<?php

require('./control/controlador.php')


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Bizum</h1>
    </header>
    <div>
        <?php
            if ($mensaje) {
                require("./vistas/mensaje.php");
            }
        ?>
    </div>
    
    <div>
        <?php require ("./vistas/$vista") ?>
    </div>

    <div>
        <?php
            if ($usuario) {
                require("./vistas/panel.php");
            }
        ?>
    </div>
</body>
</html>