<div style="text-align: center; padding-bottom:10px">
    <h4>Mensaje</h4>

    <p><b>Remitente:</b> <?php echo $contenido[0] ?></p>
    <p><b>Asunto:</b> <?php echo $contenido[1] ?></p>

    <div>
        <?php foreach (explode("\n", $contenido[2]) as $linea): ?>
            <?php echo $linea ?><br>
        <?php endforeach; ?>
    </div>

    <form>
        <button type="submit" name="accion" value="recibidos">Volver</button>
    </form>
</div>