<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Categorías</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel='stylesheet' type='text/css' media='screen' href='./styles/box.css'>
    <script src='./utils/main.js'></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body class="d-flex flex-column min-vh-100 bg-secondary.bg-gradient" style="margin-top: 3.5em;">
    <?php
    if (session_status() != 2)
        session_start();

    include_once('apis/categorias.php');

    $var = new categoriasApi();
    $totalCategorias = $var->mostrarCategorias();

    include_once('assets/header.php');
    ?>

    <div class="container mt-5 mb-5">
        <div class="container mt-5 mb-5 boxContainer">
            <legend class="text-center">Categorías</legend>

            <div class="row">
                <?php
                for ($i = 0; $i < count($totalCategorias); $i++) {
                    $foto = $totalCategorias[$i]['foto'];
                    $nombre = $totalCategorias[$i]['nombre'];
                    $descripcion = $totalCategorias[$i]['descripcion'];
                    $id_categoria = $totalCategorias[$i]['id_categoria'];

                    include('assets/categoriasItem.php');
                }
                ?>
            </div>
        </div>

        <?php
        include_once('assets/footer.php');
        ?>

</body>

</html>