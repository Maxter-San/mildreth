<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Academy Hour</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel='stylesheet' type='text/css' media='screen' href='./styles/box.css'>
    <script src='./utils/crearNivel.js'></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body class="d-flex flex-column min-vh-100 bg-secondary.bg-gradient" style="margin-top: 3.5em;">
    <?php
    if (!$_GET['curso']) {
        header("Location: index.php");
    }

    include_once('assets/header.php');
    ?>

    <div class="container mt-5 mb-5">
        <div class="container mt-5 mb-5 boxContainer">
            <legend class="text-center">Crear nivel</legend>

            <form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <div class="col-md form-group boxItem">
                    <label class="form-label">Teoría</label>
                    <input class="form-control" id="formDescripcion" minlength="0" maxlength="5000" placeholder="Escribe la teoría del nivel..." name="descripcion">
                </div>

                <div class="col-md form-group boxItem">
                    <label class="form-label">PDFs</label>
                    <input class="form-control" type="file" accept="application/pdf" id="formPDF" name="PDFs" multiple>
                </div>

                <div class="col-md form-group boxItem">
                    <label class="form-label">Links a páginas externas</label>
                    <textarea class="form-control" id="formLink" name="links" rows="3" placeholder="Separar links con saltos de fila"></textarea>
                </div>

                <div class="col-md form-group boxItem">
                    <label class="form-label">Imágenes</label>
                    <input class="form-control" type="file" accept="image/png, image/jpg, image/jpeg" id="formImagen" name="imagenes" multiple>
                </div>

                <div class="col-md form-group boxItem">
                    <label class="form-label">Videos</label>
                    <input class="form-control" type="file" accept="video/mp4" id="formVideo" name="videos[]" required multiple>
                </div>

                <div class="col-md form-group boxItem">
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-secondary" onclick="validarCrearNivel();" type="submit" name="submitCrearNivel">Crear nivel</button>
                    </div>
                </div>

            </form>
        </div>

        <div class="container mt-5 mb-5 boxContainer">
            <legend class="text-center">Niveles</legend>
            <div class="col card mb-3">
                <div class="row g-0">
                    <div class="col-md-2">
                        <img src="./resources/logo.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Nivel 1</h5>
                            <p class="card-text">Teoria: <small class="text-body-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt sint rerum assumenda consequuntur labore, soluta temporibus dolore neque accusamus esse fugiat eum quidem? Placeat molestias, quae quidem autem pariatur provident!</small></p>

                            <div class="row">
                                <div class="col">
                                    <p class="card-text">PDFs: <small class="text-body-secondary">3</small></p>
                                </div>
                                <div class="col">
                                    <p class="card-text">Links: <small class="text-body-secondary">3</small></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">Imagenes: <small class="text-body-secondary">3</small></p>
                                </div>
                                <div class="col">
                                    <p class="card-text">Videos: <small class="text-body-secondary">3</small></p>
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
        </div>
    </div>

    <?php
    include_once('assets/footer.php');
    ?>

</body>

</html>