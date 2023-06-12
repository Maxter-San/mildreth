<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Academy Hour</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel='stylesheet' type='text/css' media='screen' href='./styles/box.css'>

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
            <div class="row">
                <div class="col-3">
                    <img src="./resources/logo.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col">
                    <legend>Titulo</legend>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus beatae architecto repudiandae velit ratione. Molestias quas reprehenderit culpa provident obcaecati sunt ratione, dolor repudiandae, aspernatur excepturi ab quis illo iure.</p>
                    <span class="badge rounded-pill text-bg-secondary">Categoria1</span>
                    <span class="badge rounded-pill text-bg-secondary">Categoria2</span>
                    <span class="badge rounded-pill text-bg-secondary">Categoria3</span>


                    <hr>
                    <div class="row">
                        <div class="col">
                            <p class="card-text"><small class="text-body-secondary">5 niveles</small></p>
                        </div>
                        <div class="col">
                            <p class="card-text"><small class="text-body-secondary">$ 123.00</small></p>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Comprar
                            </button>
                            <a href="./curso.php?curso=1&nivel=1"><button type="button" class="btn btn-outline-secondary">Ver curso</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Comprar curso</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Metodo de pago:
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Default radio
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary" name="buttonComprarCurso">Comprar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="container mt-5 mb-5 boxContainer">
            <legend>Comentarios</legend>
            <div class="col card mb-3">
                <div class="row g-0">
                    <div class="col-1">
                        <img src="./resources/logo.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Usuario</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">1 de 10</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col card mb-3">
                <div class="row g-0">
                    <div class="col-1">
                        <img src="./resources/logo.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Usuario</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">10 de 10</small></p>
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