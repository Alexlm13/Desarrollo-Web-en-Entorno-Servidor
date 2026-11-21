<h3>[Detalle Pedido]</h3>
<hr />
<div class="row g-3">
    <div class="col-md-6">
        <form>
            <div class="form-group mt-3">
                <label for="producto">Producto</label>
                <select class="form-control" name="producto">
                    <option value="" selected disabled required>-- Selecciona un producto --</option>
                    <?php for ($i = 0; $i < count($productos); $i++): ?>
                        <option value="<?php echo $i ?>">
                            <?php echo $productos[$i]['nombre'] ?>
                        </option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="form-group mt-3">
                <label for="cantidad">Cantidad</label>
                <input type="number" class="form-control" name="cantidad" id="cantidad" value="1">
            </div>


            <hr />
            <button class="btn btn-primary mt-3" type="submit" name="accion" value="detallepedido">Añadir y continuar</button>
            <!-- Un botón para volver anulando el pedido-->
            <button class="btn btn-primary mt-3" type="submit" name="accion" value="anular">Volver</button>
            <!-- Y un botón para guardar -->
            <button class="btn btn-primary mt-3" type="submit" name="accion" value="guardarpedido">Terminar</button>
        </form>
    </div>
    <div class="col-md-6">
        <hr />
        <h3>LÍNEAS DE PEDIDO</h3>
        <hr />
        <table class="table mt-3 table-striped thead-dark">
            <thead class="thead-dark">
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($lineas as $linea): ?>
                    <tr>
                        <td><?php echo $linea['nombre'] ?></td>
                        <td><?php echo $linea['cantidad'] ?></td>
                        <td><?php echo $linea['subtotal']. "€" ?></td>
                        <td>
                            <form>
                                <input type="hidden" name="linea" value=<?php $linea['nombre'] ?> />
                                <button class="btn btn-primary" type="submit" name="accion" value="eliminarlinea">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>


            </tbody>
            <tfoot>
                <th colspan="2">TOTAL</th>
                <th><?php echo $total; ?>€</th>
            </tfoot>
        </table>
    </div>