<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="icon" href="favicon.png" sizes="192x192" />
    <title>Gestión de Pedidos</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" />
    <link href="./css/columnas.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/libro.css" type="text/css" />
    <script src="./js/bootstrap.bundle.min.js" type="text/javascript"></script>

</head>

<body>
    <div>
        <!-- El menú -->
        <div id="menu">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">

                    <a class="navbar-brand" href="?accion=materia&materia=Inicio">
                        <img src="favicon.png" alt="DWES" width="80" height="80">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="?accion=clientes">[ CLIENTES ]</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?accion=productos">[ PRODUCTOS ]</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?accion=pedidos">[ PEDIDOS ]</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Botones a la derecha -->
                    <!--<div class="d-flex">
        <form>
          <button type="submit" class="btn btn-outline-primary me-2" name="accion" value="vercomentario">Deja un comentario</button>
          <button class="btn btn-primary" type="submit" name="accion" value="imprimir">Imprimir</button>
        </form>
      </div>-->
                </div>
            </nav>
        </div>

        <main class="container mt-3">
            <!-- Los posibles mensajes -->
            <div class="mt-3">
                <!-- Si nos han dejado algún mensaje -->
            </div>
            <div id="vistas">
                <h3>[Nuevo Pedido]</h3>
                <hr />
                <form>
                    <div class="form-group mt-3">
                        <label for="fecha">Fecha</label>
                        <input type="date" class="form-control" name="fecha" id="fecha" value="2026-10-19">
                    </div>
                    <div class="form-group mt-3">
                        <label for="cliente">Cliente</label>
                        <select class="form-control" id="cliente" name="cliente">
                            <option value="José Pérez">
                                José Pérez </option>
                            <option value="Ana Sánchez">
                                Ana Sánchez </option>
                            <option value="Eva Martín">
                                Eva Martín </option>
                            <option value="Maria Pérez">
                                Maria Pérez </option>
                            <option value="Pedro Romero">
                                Pedro Romero </option>
                        </select>
                    </div>
                    <hr />
                    <button class="btn btn-primary mt-3" type="submit" name="accion" value="detallepedido">Continuar</button>
                    <!-- Un botón para volver -->
                    <button class="btn btn-primary mt-3" type="submit" name="accion" value="pedidos">Volver</button>
                </form>
            </div>
        </main>
    </div>
</body>

</html>