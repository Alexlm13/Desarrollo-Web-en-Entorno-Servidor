<div style="text-align:center; padding-bottom:10px">
    <div>
        <h4>Bienvenido, <?php echo $_SESSION['usuario'] ?></h4>
        <div>
            <?php foreach ($recibidos as $fichero): ?>
                <form>
                    <?php echo $fichero ?>
                    <button type="submit" name="accion" value="leerRecibidos" style="margin-left: 50px; margin-bottom:10px">Leer</button>
                    <input type="hidden" name="fichero" value="<?php echo $fichero ?>">
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>