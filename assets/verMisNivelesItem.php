<div class="col card mb-3">
    <div class="row g-0">
        <div class="col-md">
            <div class="card-body">
                <h5 class="card-title"><?php echo $nombre; ?></h5>
                <p class="card-text">Teoria: <small class="text-body-secondary"><?php echo $teoria; ?></small></p>

                <div class="row">
                    <div class="col">
                        <p class="card-text">PDFs: <small class="text-body-secondary"><?php echo $pdf; ?></small></p>
                    </div>
                    <div class="col">
                        <p class="card-text">Links: <small class="text-body-secondary"><?php echo $link; ?></small></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="card-text">Imagenes: <small class="text-body-secondary"><?php echo $imagen; ?></small></p>
                    </div>
                    <div class="col">
                        <p class="card-text">Videos: <small class="text-body-secondary"><?php echo $video; ?></small></p>
                    </div>
                </div>

                <hr>

                <div class="row text-center">
                    <div class="col">
                    </div>
                    <div class="col-1">
                        <button type="button" class="btn btn-outline-danger">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>