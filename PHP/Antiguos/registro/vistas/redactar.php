<div style="text-align: center; padding-bottom:20px">
    <h4>Bienvenido, <?php echo $_SESSION['usuario'] ?></h4>
    <form>
        <div style="margin-bottom: 10px;">
            <label style="padding-right: 48px;">Destinatario</label>
            <select name="destinatario" style="margin-left:18px;">
                <?php foreach ($usuarios as $destinatario): ?>
                    <option value="<?php echo $destinatario ?>"><?php echo $destinatario ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <label>Asunto</label>
            <input type="text" name="asunto" />
        </div>

        <div>
            <label>Mensaje</label><br>
            <textarea name="contenido" rows="6" cols="40"></textarea>
        </div>

        <button type="submit" name="accion" value="enviarMensaje">Enviar mensaje</button>
    </form>
</div>