<?php 

require("./control/controlador.php");

?>



<!DOCTYPE html>
<html lang="en">
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
        
    require("./vistas/$vistas");

    if (isset($_SESSION['usuario'])) {
        include("./vistas/panel.php");
    }
    
    ?>
</body>
</html>