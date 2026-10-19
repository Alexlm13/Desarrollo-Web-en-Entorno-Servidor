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
                <h3>Gestión de PEDIDOS</h3>
                <hr />
                <div>
                    <form>
                        <button class="btn btn-primary" type="submit" name="accion" value="nuevopedido">Nuevo Pedido</button>
                    </form>
                    <hr />


                    <table class="table mt-3 table-striped thead-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th>Fecha</th>
                                <th>Cliente</th>
                                <th>Total</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2025-11-08
                                </td>
                                <td>José Pérez
                                </td>
                                <td>1288 €</td>
                                <td>
                                    <form>
                                        <button class="btn btn-primary" type="submit" name="accion" value="imprimirpedido">
                                            Imprimir
                                        </button>

                                        <input type="hidden" name="fichero" value="1762631396.8446.txt" />
                                    </form>
                                </td>

                            </tr>
                            <tr>
                                <td>2025-11-08
                                </td>
                                <td>José Pérez
                                </td>
                                <td>1545 €</td>
                                <td>
                                    <form>
                                        <button class="btn btn-primary" type="submit" name="accion" value="imprimirpedido">
                                            Imprimir
                                        </button>

                                        <input type="hidden" name="fichero" value="1762632328.6632.txt" />
                                    </form>
                                </td>

                            </tr>
                            <tr>
                                <td>2025-11-08
                                </td>
                                <td>Ana Sánchez
                                </td>
                                <td>1799 €</td>
                                <td>
                                    <form>
                                        <button class="btn btn-primary" type="submit" name="accion" value="imprimirpedido">
                                            Imprimir
                                        </button>

                                        <input type="hidden" name="fichero" value="1762632422.3724.txt" />
                                    </form>
                                </td>

                            </tr>
                            <tr>
                                <td>2025-11-08
                                </td>
                                <td>Maria Pérez
                                </td>
                                <td>3144 €</td>
                                <td>
                                    <form>
                                        <button class="btn btn-primary" type="submit" name="accion" value="imprimirpedido">
                                            Imprimir
                                        </button>

                                        <input type="hidden" name="fichero" value="1762639352.5453.txt" />
                                    </form>
                                </td>

                            </tr>
                            <tr>
                                <td>2025-11-08
                                </td>
                                <td>Pedro Romero
                                </td>
                                <td>1378 €</td>
                                <td>
                                    <form>
                                        <button class="btn btn-primary" type="submit" name="accion" value="imprimirpedido">
                                            Imprimir
                                        </button>

                                        <input type="hidden" name="fichero" value="1762639413.9587.txt" />
                                    </form>
                                </td>

                            </tr>
                            <tr>
                                <td>2025-11-10
                                </td>
                                <td>Maria Pérez
                                </td>
                                <td>888 €</td>
                                <td>
                                    <form>
                                        <button class="btn btn-primary" type="submit" name="accion" value="imprimirpedido">
                                            Imprimir
                                        </button>

                                        <input type="hidden" name="fichero" value="1762779119.18.txt" />
                                    </form>
                                </td>

                            </tr>
                        </tbody>
                    </table>


                </div>

            </div>
    </div>
    </main>
    </div>
</body>

</html>