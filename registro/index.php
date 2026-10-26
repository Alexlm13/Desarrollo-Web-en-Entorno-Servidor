<?php

require("./controlador/control.php");


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div style="padding-left: 750px; padding-right:750px">
        <?php
        if (isset($mensaje)) {
            include("./vistas/mensaje.php");
        }
        ?>
    </div>
    <?php
    require("./vistas/$vista");

    if (isset($_SESSION['usuario'])) {
        include("./vistas/panel.php");
    }
    ?>
    <script type="module" src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>