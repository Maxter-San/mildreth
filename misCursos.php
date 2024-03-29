<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Mis cursos</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel='stylesheet' type='text/css' media='screen' href='./styles/box.css'>

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
            <legend>Filtro</legend>
            <div class="row">
                <div class="col">
                    <label for="selectRangoFecha" class="form-label">Rango de inscripción al curso</label>
                    <select class="form-select" aria-label="Default select example" id="selectRangoFecha">
                        <option value="0" selected>Todos</option>
                        <option value="1">Hace un día</option>
                        <option value="2">Hace una semana</option>
                        <option value="3">Hace un año</option>
                        <option value="4">Anteriores a un año</option>
                    </select>
                </div>
                <div class="col">
                    <label for="selectCategoria" class="form-label">Categoría</label>
                    <select class="form-select" aria-label="Default select example" id="selectCategoria">
                        <option value="0" selected>Categoría</option>
                        <option value="1">Categoría</option>
                    </select>
                </div>
                <div class="col">
                    <label for="selectTerminado" class="form-label">Curso terminado</label>
                    <select class="form-select" aria-label="Default select example" id="selectTerminado">
                        <option value="0" selected>Todos</option>
                        <option value="1">Si</option>
                        <option value="2">No</option>
                    </select>
                </div>
                <div class="col">
                    <label for="selectActivo" class="form-label">Curso activo</label>
                    <select class="form-select" aria-label="Default select example" id="selectActivo">
                        <option value="0" selected>Todos</option>
                        <option value="1">Si</option>
                        <option value="2">No</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="container mt-5 mb-5 boxContainer">
            <div class="col card mb-3">
                <div class="row g-0">
                    <div class="col-md-2">
                        <img src="./resources/logo.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <div class="row">
                                <div class="col">
                                    <p class="card-text"><small class="text-body-secondary">Inició el: 01/01/2000</small></p>
                                </div>
                                <div class="col">
                                    <p class="card-text"><small class="text-body-secondary">Último avance: 01/01/2000</small></p>
                                </div>
                                <div class="col">
                                    <p class="card-text"><small class="text-body-secondary">Fecha de finalización: 01/01/2000</small></p>
                                </div>
                            </div>

                            <br>

                            <div class="row text-center">
                                <div class="col">
                                    <a href="./indexCurso.php?curso=1"><button type="button" class="btn btn-outline-secondary">Ver Index</button></a>
                                </div>
                                <div class="col">
                                    <a href="./curso.php?curso=1&nivel=1"><button type="button" class="btn btn-outline-secondary">Continuar</button></a>
                                </div>
                            </div>


                            <hr>
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-success" style="width: 10%">10%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col card mb-3">
                <div class="row g-0">
                    <div class="col-md-2">
                        <img src="./resources/logo.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <div class="row">
                                <div class="col">
                                    <p class="card-text"><small class="text-body-secondary">Inició el: 01/01/2000</small></p>
                                </div>
                                <div class="col">
                                    <p class="card-text"><small class="text-body-secondary">Último avance: 01/01/2000</small></p>
                                </div>
                                <div class="col">
                                    <p class="card-text"><small class="text-body-secondary">Fecha de finalización: 01/01/2000</small></p>
                                </div>
                            </div>

                            <br>

                            <div class="row text-center">
                                <div class="col">
                                    <a href="./indexCurso.php?curso=1"><button type="button" class="btn btn-outline-secondary">Ver Index</button></a>
                                </div>
                                <div class="col">
                                    <a href="./curso.php?curso=1&nivel=1"><button type="button" class="btn btn-outline-secondary">Continuar</button></a>
                                </div>
                            </div>


                            <hr>
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-success" style="width: 20%">20%</div>
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