<?php

require ("./control/controlador.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($mensaje)) {
            include("./vistas/mensaje.php");
        }
        
        if (isset($_SESSION["usuario"])) {
            include("./vistas/menu.php");
        }

        if (isset($_SESSION["usuario"])&& $botones) {
            include("./vistas/panelControl.php");
        }

        require("./vistas/$vista");
    ?>
</body>
</html>