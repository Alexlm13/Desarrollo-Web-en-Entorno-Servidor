<?php

$operaciones = ["Sumar" => "+", "Restar" => "-", "Multiplicar" => "*", "Dividir" => "/", "Resto" => "%"];


//Si he pulsado el boton operar...
if (isset($_GET['accion'])) {

    // Tomo los valores
    // La operacion que quiero realizar
    $operador = $_GET['operacion'];
    //Los operandos
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];

    //preguntamos por el valor de accion, la operacion que vamos a efectuar
    //var_dump($operador);
    switch ($operador) {
        case "+":
            $res = $n1 + $n2;
            break;
        case "-":
            $res = $n1 - $n2;
            break;
        case "*":
            $res = $n1 * $n2;
            break;
        case "/":
            if ($n2 == 0) {
                $res = "No se puede realizar esta operación";
            } else {
                $res = $n1 / $n2;
            }
            break;
        case "%":
            if ($n2 == 0) {
                $res = "No se puede realizar esta operación";
            } else {
              $res = $n1 % $n2;
            }
            break;
    }
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <label>Número 1 </label>
        <input type="number" name="n1" value=<?php echo $n1 ?>>

        <label>Número 2 </label>
        <input type="number" name="n2" value=<?php echo $n2 ?>>

        <!-- Una lista con las diferentes operaciones -->
        <select name="operacion">

            <!-- Recorremos el array y creamos una opcion con cada elemento -->
            <?php foreach ($operaciones as $clave => $valor): ?>
                <option value=<?php echo $valor ?>>
                    <?php echo $clave ?>
                </option>
            <?php endforeach; ?>

        </select>

        <button name="accion" type="submit">Operar</button>

        <input type="text" name="res" value="<?php echo "$res" ?>">

    </form>
</body>

</html>