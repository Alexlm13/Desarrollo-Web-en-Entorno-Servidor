<div id="vistas">
    <h3>Gestión de PRODUCTOS</h3>
    <hr/>
    <div>
        <form>
            <button class="btn btn-primary" type="submit" name="accion" value="nuevoProducto">Nuevo Producto</button>
        </form>
        <hr />
        <table class="table mt-3 table-striped thead-dark">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($productos); $i++): ?>
                    <tr>
                        <td><?php echo $productos[$i]["nombre"]; ?></td>
                        <td><?php echo $productos[$i]["precio"]. "€"; ?></td>
                        <td>
                            <?php 
                                // Asi muestra el identifucador de la categoria
                                // echo $productos[$i]["categoria"];
                                // Asi muestra el nombre de la categoria
                                echo $categorias[$productos[$i]["categoria"]]; 
                                
                            ?>
                        </td>
                        <form>
                            <input type="hidden" name="id" value="<?php echo $productos[$i]["nombre"]?>">
                            <td><button type="submit" name="accion" value="editar" class="btn btn-primary">Editar</button></td>
                        </form>
                        <form onsubmit="return confirm('EL producto va a ser eliminado, ¿desea continuar?')">
                            <input type="hidden" name="nombreFichero" value="<?php echo $productos[$i]["nombre"] ?>">
                            <td><button type="submit" name="accion" value="eliminarProducto" class="btn btn-primary">Eliminar</button></td>
                        </form>     
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</div>