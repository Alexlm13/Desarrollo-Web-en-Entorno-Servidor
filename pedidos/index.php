<?php

require('./controlador/control.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/boostrap.min.css">
    <title>Document</title>
</head>

<body>
<<<<<<< HEAD
    <?php include("./vistas/menu.html"); ?>
    <main class="container mt-3">
    <!-- Los posibles mensajes -->
    <div class="mt-3">
        <?php require("./vistas/$vista"); ?>
=======
    <div>
        <div>
             <?php include("./vistas/menu.html"); ?>
             <div class="">
                <?php if(isset($mensaje)) include("./vistas/mensaje.php")?>
             </div>
             <?php require("./vistas/$vista"); ?>
        </div>


        <script src="./js/bootstrap.bundle.min.js"></script>
>>>>>>> ea4f1bf541ee0835f2220f8d4b4e423849191fa6
    </div>
</body>

</html>