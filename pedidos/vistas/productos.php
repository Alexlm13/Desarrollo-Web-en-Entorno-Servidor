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
                <h3>Gestión de PRODUCTOS</h3>
                <hr />
                <div>
                    <form>
                        <button class="btn btn-primary" type="submit" name="accion" value="nuevoproducto">Nuevo Producto</button>
                    </form>
                    <hr />
                    <div>

                        <table class="table mt-3 table-striped thead-dark">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Categoria</th>
                                    <th colspan="2">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Cada producto será un array asociativo -->
                                <tr>
                                    <td>Lavadora Candy
                                    </td>
                                    <td>599
                                        €</td>
                                    <td>Electrodomésticos</td>
                                    <td>
                                        <form>
                                            <button class="btn btn-primary" type="submit" name="accion" value="editarproducto">
                                                Editar
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form onsubmit="return confirm('El cliente va a ser eliminado, ¿Está seguro?')">
                                            <button class="btn btn-primary" type="submit" name="accion" value="eliminarproducto">
                                                Eliminar
                                            </button>
                                            <!-- 
                                    Un campo oculto con el nombre del producto (del fichero) 
                                    para poder editarlo o eliminarlo 
                                 -->
                                            <input type="hidden" name="fichero" value="Lavadora Candy
" />
                                        </form>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Lavavajillas Balay
                                    </td>
                                    <td>399
                                        €</td>
                                    <td>Electrodomésticos</td>
                                    <td>
                                        <form>
                                            <button class="btn btn-primary" type="submit" name="accion" value="editarproducto">
                                                Editar
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form onsubmit="return confirm('El cliente va a ser eliminado, ¿Está seguro?')">
                                            <button class="btn btn-primary" type="submit" name="accion" value="eliminarproducto">
                                                Eliminar
                                            </button>
                                            <!-- 
                                    Un campo oculto con el nombre del producto (del fichero) 
                                    para poder editarlo o eliminarlo 
                                 -->
                                            <input type="hidden" name="fichero" value="Lavavajillas Balay
" />
                                        </form>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Microondas Zanussi
                                    </td>
                                    <td>199
                                        €</td>
                                    <td>Electrodomésticos</td>
                                    <td>
                                        <form>
                                            <button class="btn btn-primary" type="submit" name="accion" value="editarproducto">
                                                Editar
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form onsubmit="return confirm('El cliente va a ser eliminado, ¿Está seguro?')">
                                            <button class="btn btn-primary" type="submit" name="accion" value="eliminarproducto">
                                                Eliminar
                                            </button>
                                            <!-- 
                                    Un campo oculto con el nombre del producto (del fichero) 
                                    para poder editarlo o eliminarlo 
                                 -->
                                            <input type="hidden" name="fichero" value="Microondas Zanussi
" />
                                        </form>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Portatil LG
                                    </td>
                                    <td>1200
                                        €</td>
                                    <td>Ordenadores</td>
                                    <td>
                                        <form>
                                            <button class="btn btn-primary" type="submit" name="accion" value="editarproducto">
                                                Editar
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form onsubmit="return confirm('El cliente va a ser eliminado, ¿Está seguro?')">
                                            <button class="btn btn-primary" type="submit" name="accion" value="eliminarproducto">
                                                Eliminar
                                            </button>
                                            <!-- 
                                    Un campo oculto con el nombre del producto (del fichero) 
                                    para poder editarlo o eliminarlo 
                                 -->
                                            <input type="hidden" name="fichero" value="Portatil LG
" />
                                        </form>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Televisor LG 55
                                    </td>
                                    <td>689
                                        €</td>
                                    <td>Televisores</td>
                                    <td>
                                        <form>
                                            <button class="btn btn-primary" type="submit" name="accion" value="editarproducto">
                                                Editar
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form onsubmit="return confirm('El cliente va a ser eliminado, ¿Está seguro?')">
                                            <button class="btn btn-primary" type="submit" name="accion" value="eliminarproducto">
                                                Eliminar
                                            </button>
                                            <!-- 
                                    Un campo oculto con el nombre del producto (del fichero) 
                                    para poder editarlo o eliminarlo 
                                 -->
                                            <input type="hidden" name="fichero" value="Televisor LG 55
" />
                                        </form>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Televisor Samsung 65
                                    </td>
                                    <td>345
                                        €</td>
                                    <td>Televisores</td>
                                    <td>
                                        <form>
                                            <button class="btn btn-primary" type="submit" name="accion" value="editarproducto">
                                                Editar
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form onsubmit="return confirm('El cliente va a ser eliminado, ¿Está seguro?')">
                                            <button class="btn btn-primary" type="submit" name="accion" value="eliminarproducto">
                                                Eliminar
                                            </button>
                                            <!-- Un campo oculto con el nombre del producto (del fichero) para poder editarlo o eliminarlo -->
                                            <input type="hidden" name="fichero" value="Televisor Samsung 65" />
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