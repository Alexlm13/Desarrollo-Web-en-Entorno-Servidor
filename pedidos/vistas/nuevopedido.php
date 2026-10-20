<main class="container mt-3">
    <!-- Los posibles mensajes -->
    <div class="mt-3">
        <!-- Si nos han dejado algún mensaje -->
    </div>
    <div id="vistas">
        <h3>[Nuevo Pedido]</h3>
        <form>
            <div class="form-group mt-3">
                <label for="fecha">Fecha</label>
                <input type="date" class="form-control" name="fecha" id="fecha" value="2026-10-19">
            </div>
            <div class="form-group mt-3">
                <label for="cliente">Cliente</label>
                <select class="form-control" id="cliente" name="cliente">

                </select>
            </div>
            <button class="btn btn-primary mt-3" type="submit" name="accion" value="detallepedido">Continuar</button>
            <!-- Un botón para volver -->
            <button class="btn btn-primary mt-3" type="submit" name="accion" value="pedidos">Volver</button>
        </form>
    </div>
</main>