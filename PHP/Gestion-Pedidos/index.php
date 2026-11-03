<?php
include "controller/control.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Gestión de pedidos</title>
</head>

<body>


    <?php include "vistas/menu.html" ?>
    <div>
        <main class="container mt-3">
        <?php
            if (isset($mensaje)) include("./vistas/mensaje.php");
        ?>
        
            <?php include "vistas/$vista" ?>
        </main>
    </div>



    <!-- JS de bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>