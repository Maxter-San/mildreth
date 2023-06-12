<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Iniciar sesión</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel='stylesheet' type='text/css' media='screen' href='./styles/box.css'>
    <script src='./utils/logIn.js'></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body class="d-flex flex-column min-vh-100 bg-secondary.bg-gradient" style="margin-top: 3.5em;">
    <?php
    include_once('assets/header.php');
    ?>

    <div class="container mt-5 mb-5 boxContainer" style="width: 30em;">
        <div class="row justify-content-center">
            <div class="card-body">
                <legend class="text-center">Iniciar sesión</legend>
            </div>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">

                <div class="mb-3">
                    <label for="formUsuario" class="form-label">Usuario</label>
                    <input class="form-control" id="formUsuario" placeholder="Escribe tú usuario..." name="usuario" value="<?php if (isset($_GET['paramUsuario'])) {
                                                                                                                                    echo ($_GET['paramUsuario']);
                                                                                                                                } ?>">
                </div>

                <div class="mb-3">
                    <label for="formPassword" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="formPassword" placeholder="Escribe tú contraseña..." name="password" value="<?php if (isset($_GET['paramPassword'])) {
                                                                                                                                                            echo ($_GET['paramPassword']);
                                                                                                                                                        } ?>">
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" value="ok" id="checkRecordar">
                    <label class="form-check-label" for="checkRecordar">
                        Recordar usuario
                    </label>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-outline-secondary" onclick="validarLogIn();" name="submitLogIn">Iniciar sesión</button>
                    <br>
                </div>
            </form>

            <br>
            <hr>
            <a href="./signUp.php" class="link-secondary">¿No tienes cuenta? Create un usuario</a>
        </div>
    </div>

    <?php
    include_once('assets/footer.php');
    ?>

</body>

</html>