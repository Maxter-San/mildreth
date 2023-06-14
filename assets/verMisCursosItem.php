<div class="col card mb-3">
    <div class="row g-0">
        <div class="col-md-2">
            <img src="<?php echo 'data:image;base64,' . base64_encode($foto); ?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?php echo $nombre; ?></h5>
                <div class="row">
                    <div class="col">
                        <p class="card-text">Fecha de creación: <small class="text-body-secondary"><?php echo $fechaCreacion; ?></small></p>
                    </div>
                    <div class="col">
                        <p class="card-text">Niveles: <small class="text-body-secondary">0</small></p>
                    </div>
                </div>

                <hr>

                <div class="row text-center">
                    <div class="col">
                        <a href="./crearNivel.php?curso=<?php echo $id_curso; ?>"><button type="button" class="btn btn-outline-secondary">Ver niveles</button></a>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-outline-danger">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>