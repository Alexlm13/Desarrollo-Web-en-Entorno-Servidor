<?php if (isset($mensaje)): ?>
    <div class="alert alert-<?php echo $color ?>  alert-dismissible fade show" role="alert">
        <?php echo $mensaje ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif ?>
