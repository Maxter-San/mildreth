<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Gestion de categoría</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel='stylesheet' type='text/css' media='screen' href='./styles/box.css'>
    <script src='./utils/main.js'></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body class="d-flex flex-column min-vh-100 bg-secondary.bg-gradient" style="margin-top: 3.5em;">
    <?php
    include_once('assets/header.php');
    ?>

    <div class="container mt-5 mb-5">
        <div class="container mt-5 mb-5 boxContainer">
            <legend class="text-center">Modificar categoría</legend>

            <form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <div class="col-md form-group boxItem">
                    <label class="form-label">Nombre de la categoría</label>
                    <input class="form-control" id="formNombre" minlength="3" maxlength="50" placeholder="Escribe el nombre de la categoría..." required name="nombre">
                </div>

                <div class="col-md form-group boxItem">
                    <label class="form-label">Descripción de la categoría</label>
                    <input class="form-control" id="formDescripcion" minlength="10" maxlength="500" placeholder="Escribe la descripción de la categoría..." required name="descripcion">
                </div>

                <div class="col-md form-group boxItem">
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-secondary" onclick="" type="submit" name="submitCrearCategoría">Crear categoría</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
    include_once('assets/footer.php');
    ?>

</body>

</html>