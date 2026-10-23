
<table class="table table-striped table-hover" >
    <?php foreach ($ficheros as $f): ?>
        <tr>
            <td><?php echo $f ?></td>
            <td>
                <form>
                    <button type="submit" name="accion" value="seleccionar">
                        Seleccionar fichero
                    </button>
                    <input type="hidden" name="archivo" 
                        value="<?php echo $f ?>" />
                </form>
            </td>
        </tr>

    <?php endforeach ?>
</table>
