<h1>Ficheros de <?php echo $_SESSION['usuario']?></h1>
<?php foreach ($ficheros as $fichero): ?>
    <?php if(!($fichero==="."||$fichero==="..")): ?>
        <form>
            <label><?php echo $fichero?></label>
            <button type="submit" name="accion" value="verContenido">Abrir</button>
            <input type="hidden" name="fichero" value="<?php echo $fichero?>">
        </form>
    <?php endif; ?>
<?php endforeach; ?>