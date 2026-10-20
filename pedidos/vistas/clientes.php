<main class="container mt-3">
    <!-- Los posibles mensajes -->
    <div class="mt-3">
        <!-- Si nos han dejado algún mensaje -->
    </div>
    <div id="vistas">
        <h3>Gestión de CLIENTES</h3>
        <div>
            <form>
                <button class="btn btn-primary" type="submit" name="accion" value="nuevocliente">Nuevo Cliente</button>
            </form>
            <div>
                <table class="table mt-3 table-striped thead-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th>Identificador</th>
                            <th>Nombre</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  foreach($clientes as $clave=>$valor):?>
                        <tr>
                            <td><?php echo $clave?></td>
                            <td><?php echo $valor?></td>
                            <td>
                                <form>
                                    <button class="btn btn-primary" type="submit" name="accion" value="editarcliente">
                                        Editar
                                    </button>
                                    <input type="hidden" name="id" value="<?php echo $clave ?>" />
                                </form>
                            </td>
                            <td>
                                <form onsubmit="return confirm('El cliente va a ser eliminado, ¿Está seguro?')">
                                    <button class="btn btn-primary" type="submit" name="accion" value="eliminarcliente">
                                        Eliminar
                                    </button>
                                    <input type="hidden" name="id" value="<?php echo $clave ?>" />
                                </form>
                            </td>
                        </tr>
                        <?php endforeach ;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>