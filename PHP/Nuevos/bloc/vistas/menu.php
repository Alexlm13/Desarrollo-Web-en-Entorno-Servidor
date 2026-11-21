<h1>Bienvenido <?php echo $_SESSION['usuario']?></h1>

<form>
    <label for="archivo">Archivo</label>
    <input type="text" id="archivo" name="archivo" value="<?php echo $_GET['fichero'] ?>"><br><br>

    <button type="submit" name="accion" value="abrirFicheros">Abrir fichero</button>
    <button type="submit" name="accion" value="guardarFichero">Guardar fichero</button><br><br>

    <textarea name="textArea" id="textArea" rows="20" cols="80"><?php echo $contenido ?></textarea><br><br>
    
    <button type="submit" name="accion" value="cerrar">Cerrar sesión</button>
</form>
