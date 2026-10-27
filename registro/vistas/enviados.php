<div>
    <div style="text-align: center;">
        <h4>Bienvenido, <?php echo $_SESSION['usuario'] ?></h4>
        <div>
            <?php foreach ($enviados as $fichero):?>
                <form>
                    <?php echo $fichero?>
                    <button type="submit" name="accion" value="leerEnviados" style="margin-left: 100px; margin-bottom:50px">Leer</button>
                    <input type="hidden" name="fichero" value="<?php echo $fichero?>">
                </form>
            <?php endforeach;?>
        </div>
        
    </div>
</div>