<div>
    <div style="text-align: center;">
        <h4>Bienvenido, <?php echo $_SESSION['usuario'] ?></h4>
        <div>
            <?php foreach ($recibidos as $fichero):?>
                    <?php echo $fichero?>
            <?php endforeach;?>
        </div>
        
    </div>
</div>