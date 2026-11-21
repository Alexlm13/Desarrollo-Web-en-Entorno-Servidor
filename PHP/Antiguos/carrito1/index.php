<?php
//inicializamos la sesion
session_start();

$articulos = [
    [1001, "Lavadora", 345.99],
    [1002, "Microondas", 245.99],
    [1003, "Televisor LG 65''", 499.99]
];

if (isset($_GET["accion"])) {
    switch ($_GET["accion"]) {
        case 'comprar':
            //Recogemos el valor del boton 
            $cod = $_GET["codigo"];
            //y lo añadimos a la sesion
            array_push($_SESSION["cesta"], $cod);
            break;
        case 'vaciar':
            $_SESSION["cesta"] = [];
            break;
        case 'borrar':
            $pos=$_GET["posicion"];
            array_splice($_SESSION["cesta"],$pos,1);
            //var_dump($pos);
            break;
    }

    //var_dump($_SESSION["cesta"]);
} else {
    /*la primera vez que accedemos a la pagina creamos la cesta en la sesion
    la cesta guardara la posicion que ocupa el articulo que vamos a añadir a la cesta
    en el array articulos*/
    $_SESSION["cesta"] = [];
}




?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Mi carrito</title>
</head>

<body>
    <table class="table table-striped table-hover">
        <h3>ARTICULOS</h3>
        <thead>
            <th>Código</th>
            <th>Descripción</th>
            <th>Precio</th>
        </thead>
        <tbody>
            <!--Mostramos los articulos disponibles-->
            <!--Cada articulo es un array que se mostrara en una fila-->
            <?php for ($i = 0; $i < count($articulos); $i++) : ?>
                <tr>
                    <!--Mostramos en diferentes celdas cada dato del articulo-->
                    <!--El código-->
                    <td><?php echo $articulos[$i][0] ?></td>
                    <!--La descripción-->
                    <td><?php echo $articulos[$i][1] ?></td>
                    <!--El precio-->
                    <td><?php echo $articulos[$i][2] ?></td>

                    <td>
                        <form>
                            <button type="submit" name="accion" value="comprar">
                                Comprar
                            </button>

                            <input type="hidden" name="codigo" value="<?php echo $i ?>">
                        </form>
                    </td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>

    <table class="table table-striped table-hover">
        <h3>CESTA</h3>
        <thead>
            <th>Código</th>
            <th>Descripción</th>
            <th>Precio</th>
        </thead>
        <tbody>
            <!--Recorremos la cesta y mostramos los articulos-->
            <?php $pos = 0 ?>
            <?php foreach ($_SESSION["cesta"] as $producto) : ?>
                <tr>
                    <td><?php echo $articulos[$producto][0] ?></td>
                    <td><?php echo $articulos[$producto][1] ?></td>
                    <td><?php echo $articulos[$producto][2] ?></td>

                    <td>
                        <form>
                            <button type="submit" name="accion" value="borrar">
                                Eliminar artículo
                            </button>
                            <input type="hidden" value="<?php echo $pos ?>" name="posicion">
                        </form>
                    </td>
                </tr>
            <!--Incremento la posicion-->
                <?php $pos++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <form>
        <button type="submit" value="vaciar" name="accion">
            Vaciar cesta
        </button>
    </form>

</body>

</html>