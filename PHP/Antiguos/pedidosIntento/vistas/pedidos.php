<main class="container mt-3">
    <!-- Los posibles mensajes -->
    <div class="mt-3">
        <!-- Si nos han dejado algún mensaje -->
    </div>
    <div id="vistas">
        <h3>Gestión de PEDIDOS</h3>
        <div>
            <form>
                <button class="btn btn-primary" type="submit" name="accion" value="nuevopedido">Nuevo Pedido</button>
            </form>
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
                    <tr>
                        <form>
                            <button class="btn btn-primary" type="submit" name="accion" value="imprimirpedido">
                                Imprimir
                            </button>

                            <input type="hidden" name="fichero" value="" />
                        </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</main>
</div>
</body>

</html>