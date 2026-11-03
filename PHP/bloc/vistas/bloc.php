    <div class="container mt-3">
        <div class="mb-3">
            <form>
                <label>
                    <?php echo "Bienvenido/a " . $_SESSION["usuario"]; ?>
                </label>
                <button type="submit" name="accion" value="cerrar">Cerrar sesión</button>
            </form>
        </div>
        <!--Aqui estaba alertas-->
        <form> <!-- Metodo GET por defecto -->
            <label for="archivo">Archivo</label>
            <input type="text" name="archivo" id="archivo" value="<?php echo $archivo ?>">
            <button type="submit" name="accion" value="guardar">Guardar archivo</button>
            <button type="submit" name="accion" value="abrir">Abrir archivo</button>
            <div class="mt-3">
                <textarea name="texto" cols="80" rows="10"><?php echo $texto ?></textarea>
            </div>
        </form>
    </div>