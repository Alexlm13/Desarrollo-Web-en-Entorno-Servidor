<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $capitales=[
        'España'=>'Madrid',
        'Francia' => 'París',
        'Italia' => 'Roma'        
    ];

    foreach ($capitales as $pais => $capital) {
        echo $pais." ".$capital.'<br>';
    }
    ?>
</body>
</html>