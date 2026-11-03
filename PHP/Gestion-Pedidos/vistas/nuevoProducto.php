<h3>[Nuevo Producto]</h3>
<hr />

<form>
    
    <div class="form-group  mt-3">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre" required>
    </div>
    <div class="form-group mt-3">
        <label for="precio">Precio (€)</label>
        <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" required>
    </div>
    <div class="form-group mt-3">
        <label for="categoria">Categoría</label>
        <select class="form-control" id="categoria" name="categoria" required>
            <option value="" selected disabled>-- Selecciona una categoría --</option>
            <?php foreach($categorias as $clave => $valor): ?>
                <option value="<?php echo $valor ?>">
                    <?php echo $valor; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <hr />
    <button class="btn btn-primary mt-3" type="submit" name="accion" value="guardarProducto">Guardar</button>
    <!-- Un botón para volver -->
    <button class="btn btn-primary mt-3" type="submit" name="accion" value="productos">Volver</button>
</form>