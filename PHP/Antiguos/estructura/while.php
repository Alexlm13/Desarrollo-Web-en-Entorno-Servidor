<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de while</title>
</head>
<body>
<!-- Programa que muestre los primeros 100 números-->

    <?php $num=1; ?> <!--Iniciamos la variable-->
        
    <?php while($num <= 100): ?>
        <p>
            <?php
            echo $num; 
            $num++;
            ?>
        </p>
    <?php endwhile; ?>
</body>
</html>