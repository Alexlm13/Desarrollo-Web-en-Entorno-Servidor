<form>
    <div style="text-align: center;">
        <h4>Bienvenido, <?php echo $_SESSION['usuario'] ?></h4>
        <div>
            <?php foreach ($recibidos as $fichero):?>
                <div>
                    <?php echo $fichero?>
                    <button type="submit" name="fichero" value="<?php echo $fichero?>" style="margin-left: 100px; margin-bottom:50px">Leer</button>
                </div>
                <input type="hidden" name="accion" value="leer">
            <?php endforeach;?>
        </div>
        
    </div>
</form>