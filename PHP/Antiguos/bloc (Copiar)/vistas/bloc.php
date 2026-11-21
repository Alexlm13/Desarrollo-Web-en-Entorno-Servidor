<?php
// Incluimos el controlador con la logica
require("..//controller//bloc.php");

// si no está establecida la variable de sesion "usuario"
if(!isset($_SESSION["usuario"])){
    //me voy a la página principal
    header("Location: ../index.php");
}
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
        <div class="mb-3">
            <form>
                <label>
                    <?php echo "Bienvenido/a " .$_SESSION["usuario"]; ?>
                </label>
                <button type="submit" name="accion" value="cerrar">Cerrar sesión</button>
            </form>
        </div>
        <?php if (isset($mensaje)): ?>
            <div class="alert alert-<?php echo $tipo ?> alert-dismissible fade show" role="alert">
                <?php echo $mensaje ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif ?>
        <form> <!-- Metodo GET por defecto -->
            <label for="archivo">Archivo</label>
            <input type="text" name="archivo" id="archivo" value="<?php echo $archivo ?>">
            <button type="submit" name="accion" value="guardar">Guardar archivo</button>
            <button type="submit" name="accion" value="abrir">Abrir archivo</button>
            <div class="mt-3">
                <textarea name="texto" cols="80" rows="10"><?php echo $texto ?></textarea>
            </div>
        </form>
    </div>
</body>

</html>