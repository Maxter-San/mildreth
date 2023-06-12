<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Buscar</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel='stylesheet' type='text/css' media='screen' href='./styles/box.css'>
    <script src='./utils/busqueda.js'></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body class="d-flex flex-column min-vh-100 bg-secondary.bg-gradient" style="margin-top: 3.5em;">
    <?php
    $filtro = null;

    if (array_key_exists('tipoFiltro', $_GET)) {
        $filtro = $_GET['tipoFiltro'];
    }


    include_once('assets/header.php');
    ?>

    <div class="container mt-5 mb-5">
        <div class="container mt-5 mb-5 boxContainer">
            <legend>Filtro</legend>

            <div class="row">
                <div class="col">
                    <label for="selectFiltro" class="form-label" onchange="<?php  ?>">Buscar por</label>
                    <select class="form-select" aria-label="Default select example" id="selectFiltro" onchange="cambiarFiltro();">
                        <option value="0" <?php if ($filtro == null || $filtro == 0) {
                                                echo "selected";
                                            } ?>>Categoría</option>
                        <option value="1" <?php if ($filtro == 1) {
                                                echo "selected";
                                            } ?>>Título</option>
                        <option value="2" <?php if ($filtro == 2) {
                                                echo "selected";
                                            } ?>>Instructor</option>
                        <option value="3" <?php if ($filtro == 3) {
                                                echo "selected";
                                            } ?>>Fecha de creación</option>
                    </select>
                </div>

                <?php
                if ($filtro == 0) {
                ?>
                    <div class="col">
                        <label for="selectCategoria" class="form-label">Categoría</label>
                        <select class="form-select" aria-label="Default select example" id="selectCategoria">
                            <option value="0" selected>Categoría</option>
                            <option value="1">Categoría</option>
                        </select>
                    </div>
                <?php
                }
                ?>

                <?php
                if ($filtro == 1) {
                ?>
                    <div class="col">
                        <label for="titulo" class="form-label">Título</label>
                        <input class="form-control" id="titulo" placeholder="Título">
                    </div>
                <?php
                }
                ?>

                <?php
                if ($filtro == 2) {
                ?>
                    <div class="col">
                        <label for="titulo" class="form-label">Instructor</label>
                        <input class="form-control" id="titulo" placeholder="Instructor">
                    </div>
                <?php
                }
                ?>

                <?php
                if ($filtro == 3) {
                ?>
                    <div class="col">
                        <label for="selectRangoFecha" class="form-label">Rango de publicación del curso</label>
                        <select class="form-select" aria-label="Default select example" id="selectRangoFecha">
                            <option value="0" selected>Todos</option>
                            <option value="1">Hace un día</option>
                            <option value="2">Hace una semana</option>
                            <option value="3">Hace un año</option>
                            <option value="4">Anteriores a un año</option>
                        </select>
                    </div>
                <?php
                }
                ?>

            </div>
            <hr>
            <div class="row text-center">
                <a href="./busqueda.php"><button type="button" class="btn btn-outline-secondary">Buscar</button></a>
            </div>
        </div>

        <div class="container mt-5 mb-5 boxContainer">
            <div class="row">
                <legend>Resultados</legend>
                <div class="col-6 card mb-3" style="max-width: 540px;">
                    <a href="./indexCurso.php?curso=1" class="nav-link text-muted">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="./resources/logo.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="row">
                                        <div class="col">
                                            <p class="card-text"><small class="text-body-secondary">123.00 $</small></p>
                                        </div>
                                        <div class="col">
                                            <p class="card-text"><small class="text-body-secondary">5 niveles</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once('assets/footer.php');
    ?>

</body>

</html>