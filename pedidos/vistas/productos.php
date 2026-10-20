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
                        <?php for($i=0;$i<count($productos);$i++) :?>
                        <tr>
                            <td><?php echo $productos[$i]["nombre"]?></td>
                            <td><?php echo $productos[$i]["precio"]?></td>
                            <td>
                                <?php
                                    $indice=$productos[$i]["idCategoria"];
                                    $nombre=$categoria[$indice];
                                    echo $nombre;
                                
                                ?>
                            </td>
                            <td>
                                <form>
                                    <button class="btn btn-primary" type="submit" name="accion" value="editarproducto">
                                        Editar
                                    </button>
                                    <input type="hidden" name="id" value="<?php echo $productos[$i]["nombre"] ?>" />
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
                                    <input type="hidden" name="fichero" value="<?php echo $productos[$i]["nombre"] ?>" />
                                </form>
                            </td>
                        </tr>
                        <?php endfor;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>