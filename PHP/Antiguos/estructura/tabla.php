<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de tabla</title>
</head>
<body>
    <?php $num=1 ;?>
    <?php for ($num; $num <=100; $num++): ?>
        <table border="1">
            <tr>
                <td><?php echo $num;?></td>
            </tr>
        </table>
    <?php endfor; ?>
</body>
</html>