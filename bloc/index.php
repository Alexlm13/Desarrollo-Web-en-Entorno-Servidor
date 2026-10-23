<?php
require_once('.//controller//autenticacion.php');
require_once('.//controller//bloc.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Bloc de notas</title>
</head>

<body>
    <div class="container mt-3">
        <?php include ('./vistas/menu.html'); ?>
        <?php require ('./vistas/alertas.php'); ?>
        <?php require ("./vistas/$vista"); ?>
        <?php include ('./vistas/pie.html') ?>
    </div>
</body>

</html>