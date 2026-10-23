<?php

include('.//controlador//control.php');

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("./vistas/menu.html"); ?>
    <main class="container mt-3">
    <!-- Los posibles mensajes -->
    <div class="mt-3">
        <?php require("./vistas/$vista"); ?>
    </div>
</body>
</html>