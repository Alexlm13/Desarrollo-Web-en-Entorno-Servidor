<hr>
<h2>Enviar</h2>
<form>
    <input type="text" name="dinero"> € 
    <button type="submit" name="accion" value="enviarBizum">Enviar Bizum</button>
    <br><br>
    <select name="destino">
        <?php foreach($usuarios as $usuario):?>
            <option value="<?php echo $usuario?>"><?php echo $usuario?></option>
        <?php endforeach;?>
    </select>
    
    <label>Destinatario</label>
    

</form>