<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $frutas = ['Cereza', 'Kiwi', 'Melocotón', 'Fresa'];

    echo $frutas[3] . '<br>';

    foreach ($frutas as $fruta) {
        echo $fruta;
    }
    ?>
    
    
    <select>
        <?php foreach ($frutas as $fruta) :?>
        <option value="<?php echo $fruta; ?>">
            <?php echo $fruta; ?>
        </option>
        <?php endforeach; ?>
    </select>
    
</body>

</html>