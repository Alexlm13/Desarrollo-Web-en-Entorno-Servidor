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
    <div>
        <div>
             <?php include("./vistas/menu.html"); ?>
             <div class="">
                <?php if(isset($mensaje)) include("./vistas/mensaje.php")?>
             </div>
             <?php require("./vistas/$vista"); ?>
        </div>


        <script src="./js/bootstrap.bundle.min.js"></script>
    </div>
</body>

</html>