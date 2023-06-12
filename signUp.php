<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Crear usuario</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel='stylesheet' type='text/css' media='screen' href='./styles/box.css'>
    <script src='./utils/signUp.js'></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body class="d-flex flex-column min-vh-100 bg-secondary.bg-gradient" style="margin-top: 3.5em;">
    <?php
    include_once('assets/header.php');
    ?>

    <div class="container mt-5 mb-5 boxContainer">
        <div class="card-body">
            <legend class="text-center">Crear usuario</legend>
        </div>
        <form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <div class="col-md form-group boxItem">
                <label class="form-label">Nombre(s)</label>
                <input class="form-control" id="formNombre" minlength="3" maxlength="50" placeholder="Escribe tu nombre(s)..." required name="nombre" value="<?php if (isset($_GET['paramNombre'])) {
                                                                                                                                                    echo ($_GET['paramNombre']);
                                                                                                                                                } ?>">
            </div>

            <div class="col-md form-group boxItem">
                <label class="form-label">Apellido(s)</label>
                <input class="form-control" id="formApellido" minlength="3" maxlength="50" placeholder="Escribe tu apellido(s)..." required name="apellido" value="<?php if (isset($_GET['paramApellido'])) {
                                                                                                                                                            echo ($_GET['paramApellido']);
                                                                                                                                                        } ?>">
            </div>

            <div class="col-md form-group boxItem">
                <label class="form-label">Género</label>
                <select class="form-select" id="formGenero" required name="genero">
                    <option value="">Selecciona tu sexo</option>
                    <option value="Hombre" <?php if (isset($_GET['paramGenero'])) {
                                                if ($_GET['paramGenero'] == "Hombre") {
                                                    echo ("selected");
                                                }
                                            } ?>>Hombre
                    </option>

                    <option value="Mujer" <?php if (isset($_GET['paramGenero'])) {
                                                if ($_GET['paramGenero'] == "Mujer") {
                                                    echo ("selected");
                                                }
                                            } ?>>Mujer
                    </option>

                    <option value="Otro" <?php if (isset($_GET['paramGenero'])) {
                                                if ($_GET['paramGenero'] == "Otro") {
                                                    echo ("selected");
                                                }
                                            } ?>>Otro
                    </option>
                </select>
            </div>

            <div class="col-md form-group boxItem">
                <label class="form-label">Fecha de nacimiento</label>
                <input class="form-control" type="date" id="formFechaNacimiento" required name="fechaNacimiento" value="<?php if (isset($_GET['paramFechaNacimiento'])) {
                                                                                                                            echo ($_GET['paramFechaNacimiento']);
                                                                                                                        } ?>">
            </div>

            <div class="col-md form-group boxItem">
                <label class="form-label">Foto</label>
                <input class="form-control" type="file" accept="image/png, image/jpg, image/jpeg" id="formFoto" required name="foto">
            </div>

            <div class="col-md form-group boxItem">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" id="formEmail" maxlength="50" placeholder="Escribe tu email..." required name="email" value="<?php if (isset($_GET['paramEmail'])) {
                                                                                                                                                    echo ($_GET['paramEmail']);
                                                                                                                                                } ?>">
            </div>

            <div class="col-md form-group boxItem">
                <label class="form-label">Contraseña</label>
                <input class="form-control" type="password" id="formPassword" minlength="8" maxlength="50" placeholder="Escribe tu contraseña..." required name="password" value="<?php if (isset($_GET['paramPassword'])) {
                                                                                                                                                    echo ($_GET['paramPassword']);
                                                                                                                                                } ?>">
            </div>

            <br>
            
            <div class="col-md form-group boxItem">
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-secondary" onclick="validarSignUp();" type="submit" name="submitSignUp">Registrarme</button>
                </div>
            </div>
        </form>
    </div>

    <?php
    include_once('assets/footer.php');
    ?>

</body>

</html>