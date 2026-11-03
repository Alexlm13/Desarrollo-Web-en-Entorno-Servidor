<div id="vistas">
    <h3>Gestión de CLIENTES</h3>
    <hr/>
    <div>
        <form>
            <button class="btn btn-primary" type="submit" name="accion" value="nuevoCliente">Nuevo Cliente</button>
        </form>
        <hr />
        <table class="table mt-3 table-striped thead-dark">
            <thead class="thead-dark">
                <tr>
                    <th>Identificador</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $id => $cliente): ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $cliente; ?></td>
                        <form>
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <td><button type="submit" name="accion" value="editar" class="btn btn-primary">Editar</button></td>
                        </form>
                        <form onsubmit="return confirm('EL cliente va a ser eliminado, ¿desea continuar?')">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <td><button type="submit" name="accion" value="editar" class="btn btn-primary">Eliminar</button></td>
                        </form>     
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>