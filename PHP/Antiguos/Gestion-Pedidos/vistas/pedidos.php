<div id="vistas">
    <h3>Gestión de PEDIDOS</h3>
    <hr />
    <div>
        <form>
            <button class="btn btn-primary" type="submit" name="accion" value="nuevoPedido">Nuevo Pedido</button>
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
                <?php for ($i = 0; $i < count($pedidos); $i++): ?>
                    <tr>
                        <td><?php echo $pedidos[$i]["fecha"]; ?></td>
                        <td><?php echo $pedidos[$i]["nombreCliente"]; ?></td>
                        <td><?php echo $pedidos[$i]["total"] . "€"; ?></td>
                        <td>
                            <form>
                                <button class="btn btn-primary" type="submit" name="accion" value="imprimirpedido">
                                    Imprimir
                                </button>

                                <input type="hidden" name="fichero" value="<?php echo $pedidos[$i]["fichero"] ?>" />
                            </form>
                        </td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</div>