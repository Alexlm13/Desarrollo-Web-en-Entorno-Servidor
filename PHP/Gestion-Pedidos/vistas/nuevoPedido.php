<h3>[Nuevo Pedido]</h3>
<hr />
<form>
    <div class="form-group mt-3">
        <label for="fecha">Fecha</label>
        <input type="date" class="form-control" name="fecha" id="fecha" value="<?php echo date('d/m/y') ?>">
    </div>
    <div class="form-group mt-3">
        <label for="cliente">Cliente</label>
        <select class="form-control" id="cliente" name="cliente">
            <option value="" selected disabled required>-- Selecciona un cliente --</option>
            <?php foreach($clientes as $id => $nombre): ?>
                <option value="<?php echo $id ?>">
                    <?php echo $nombre; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <hr />
    <button class="btn btn-primary mt-3" type="submit" name="accion" value="detallepedido">Continuar</button>
    <!-- Un botón para volver -->
    <button class="btn btn-primary mt-3" type="submit" name="accion" value="pedidos">Volver</button>
</form>