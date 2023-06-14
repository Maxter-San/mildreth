<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Crear nivel</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel='stylesheet' type='text/css' media='screen' href='./styles/box.css'>
    <script src='./utils/crearNivel.js'></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body class="d-flex flex-column min-vh-100 bg-secondary.bg-gradient" style="margin-top: 3.5em;">
    <?php


    include_once('apis/niveles.php');
    $var = new nivelesApi();
    $misNiveles = $var->verMisNivelesDetalle();

    include_once('assets/header.php');
    ?>

    <div class="container mt-5 mb-5">
        <div class="container mt-5 mb-5 boxContainer">
            <legend class="text-center">Crear nivel</legend>

            <form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <input class="form-control" id="formDescripcion" minlength="0" maxlength="100" placeholder="Escribe la teoría del nivel..." name="curso" hidden readonly value="<?php echo $_GET['curso']; ?>">
                
                <div class="col-md form-group boxItem">
                    <label class="form-label">Nombre</label>
                    <input class="form-control" id="formNombre" minlength="0" maxlength="50" placeholder="Escribe el nombre del nivel..." name="nombre">
                </div>

                <div class="col-md form-group boxItem">
                    <label class="form-label">Teoría</label>
                    <input class="form-control" id="formDescripcion" minlength="0" maxlength="5000" placeholder="Escribe la teoría del nivel..." name="teoria">
                </div>

                <div class="col-md form-group boxItem">
                    <label class="form-label">PDFs</label>
                    <input class="form-control" type="file" accept="application/pdf" id="formPDF" name="pdf[]" multiple>
                </div>

                <div class="col-md form-group boxItem">
                    <label class="form-label">Links a páginas externas</label>
                    <textarea class="form-control" id="formLink" name="links" rows="3" placeholder="Separar links con saltos de fila"></textarea>
                </div>

                <div class="col-md form-group boxItem">
                    <label class="form-label">Imágenes</label>
                    <input class="form-control" type="file" accept="image/png, image/jpg, image/jpeg" id="formImagen" name="foto[]" multiple>
                </div>

                <div class="col-md form-group boxItem">
                    <label class="form-label">Videos</label>
                    <input class="form-control" type="file" accept="video/mp4" id="formVideo" name="video[]" multiple required>
                </div>

                <div class="col-md form-group boxItem">
                    <label class="form-label">Precio del nivel</label>
                    <input class="form-control" type="number" id="formPrecio" min="0" placeholder="Precio del nivel..." name="precio" required value="0">
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
            <?php
            for ($i = 0; $i < count($misNiveles); $i++) {
                $nombre = $misNiveles[$i]['nombre'];
                $teoria = $misNiveles[$i]['teoria'];
                $id_nivel = $misNiveles[$i]['id_nivel'];
                $imagen = $misNiveles[$i]['imagen'];
                $video = $misNiveles[$i]['video'];
                $pdf = $misNiveles[$i]['pdf'];
                $link = $misNiveles[$i]['link'];

                include('assets/verMisNivelesItem.php');
            }
            ?>
        </div>
    </div>

    <?php
    include_once('assets/footer.php');
    ?>

</body>

</html>