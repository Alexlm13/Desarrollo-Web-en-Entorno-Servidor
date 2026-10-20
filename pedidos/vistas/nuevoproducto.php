<main class="container mt-3">
    <!-- Los posibles mensajes -->
    <div class="mt-3">
        <!-- Si nos han dejado algún mensaje -->
    </div>
    <div id="vistas">
        <h3>[Nuevo Producto]</h3>
        <hr />
        <form>
            <div class="form-group  mt-3">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre">
            </div>
            <div class="form-group mt-3">
                <label for="precio">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio">
            </div>
            <div class="form-group mt-3">
                <label for="categoria">Categoría</label>
                <select class="form-control" id="categoria" name="categoria">
                    <option value="1">
                        Electrodomésticos</option>
                    <option value="2">
                        Ordenadores </option>
                    <option value="3">
                        Televisores </option>
                </select>
            </div>
            <button class="btn btn-primary mt-3" type="submit" name="accion" value="guardarproducto">Guardar</button>
            <!-- Un botón para volver -->
            <button class="btn btn-primary mt-3" type="submit" name="accion" value="productos">Volver</button>
        </form>
    </div>
</main>