<main class="container mt-3">
    <!-- Los posibles mensajes -->
    <div class="mt-3">
        <!-- Si nos han dejado algún mensaje -->
    </div>
    <div id="vistas">
        <h3>[Detalle Pedido]</h3>
        <div class="contenedor-flex">
            <div class="columna-flex">
                <form>
                    <div class="form-group mt-3">
                        <label for="producto">Producto</label>
                        <select class="form-control" id="producto" name="producto">
                            
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" class="form-control" name="cantidad" id="cantidad" value="1">
                    </div>

                    <button class="btn btn-primary mt-3" type="submit" name="accion" value="detallepedido">Añadir y continuar</button>
                    <!-- Un botón para volver anulando el pedido-->
                    <button class="btn btn-primary mt-3" type="submit" name="accion" value="anular">Volver</button>
                    <!-- Y un botón para guardar -->
                    <button class="btn btn-primary mt-3" type="submit" name="accion" value="guardarpedido">Terminar</button>
                </form>
            </div>
            <div class="columna-flex">
                <h3>LÍNEAS DE PEDIDO</h3>
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td>0 €</td>
                            <td>
                                <form>
                                    <button class="btn btn-primary" type="submit" name="accion" value="eliminarlinea">
                                        Eliminar
                                    </button>
                                    <!-- 
                                    Un campo oculto con el número de línea
                                    para poder eliminarlo 
                                 -->
                                    <!-- <input type="hidden" name="linea" value="" /> -->
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <th colspan="2">TOTAL</th>
                        <th>0€</th>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</main>