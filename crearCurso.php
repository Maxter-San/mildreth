<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Crear curso</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel='stylesheet' type='text/css' media='screen' href='./styles/box.css'>
    <script src='./utils/crearCurso.js'></script>

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
            <legend class="text-center">Crear curso</legend>

            <form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <div class="col-md form-group boxItem">
                    <label class="form-label">Nombre del curso</label>
                    <input class="form-control" id="formNombre" minlength="3" maxlength="50" placeholder="Escribe el nombre del curso..." required name="nombre">
                </div>

                <div class="col-md form-group boxItem">
                    <label class="form-label">Descripción del curso</label>
                    <input class="form-control" id="formDescripcion" minlength="10" maxlength="500" placeholder="Escribe la descripción del curso..." required name="descripcion">
                </div>

                <div class="col-md form-group boxItem">
                    <label for="formControlCategory" class="form-label">Selecciona la categoría</label>
                    <div class="dropdown-center d-grid gap-2" id="CheckCategories">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Elige una o más categorías
                        </button>
                        <ul class="dropdown-menu dropdown-menu-secondary">


                            <li>
                                <a class="dropdown-item" data-value="item-">
                                    <div class="form-check">
                                        <input class="checkCategories form-check-input" type="checkbox" value="" id="flexCheckCategories" name="">
                                        <label class="form-check-label" for="flexCheckCategories">
                                            categoria
                                        </label>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="./crearCategoria.php" target="_blank">Crear categoría</a>
                            </li>


                        </ul>

                    </div>
                </div>

                <div class="col-md form-group boxItem">
                    <label for="selectCobro" class="form-label">Método de cobro</label>
                    <select class="form-select" aria-label="Default select example" id="selectCobro" required onchange="onChangeCobrar();">
                        <option value="">Selecciona un método de cobro</option>
                        <option value="1">Cobrar por curso</option>
                        <option value="2">Cobrar por nivel</option>
                    </select>
                </div>

                <div class="col-md form-group boxItem">
                    <label class="form-label">Precio del curso</label>
                    <input class="form-control" type="number" id="formPrecio" min="1" placeholder="Precio del curso..." name="precio" disabled>
                </div>

                <div class="col-md form-group boxItem">
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-secondary" onclick="" type="submit" name="submitCrearCurso">Crear curso</button>
                    </div>
                </div>
            </form>

        </div>

        <div class="container mt-5 mb-5 boxContainer">
            <legend class="text-center">Mis cursos</legend>
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
                                    <p class="card-text">Fecha de creación: <small class="text-body-secondary">01/01/2000</small></p>
                                </div>
                                <div class="col">
                                    <p class="card-text">Niveles: <small class="text-body-secondary">0</small></p>
                                </div>
                            </div>

                            <hr>

                            <div class="row text-center">
                                <div class="col">
                                    <a href="./crearNivel.php?curso=1"><button type="button" class="btn btn-outline-secondary">Ver niveles</button></a>
                                </div>
                                <div class="col">
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