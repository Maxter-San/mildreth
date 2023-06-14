<div class="col-md-3">
    <div class="card" style="width: 18rem;">
        <img src="<?php echo 'data:image;base64,' . base64_encode($foto); ?>" class="card-img-top" alt="..." style="height: 10rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $nombre; ?></h5>
            <p class="card-text"><?php echo $descripcion; ?></p>

            <?php
            if ($_SESSION["s_userType"] == "Admin") {
            ?>
                <a href="./gestionarCategorias.php?categoria=<?php echo $id_categoria; ?>" class="btn btn-secondary">Editar</a>
            <?php
            }
            ?>
        </div>
    </div>
</div>