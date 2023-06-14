<?php
include_once 'base de datos/nivel.php';

class nivelesApi
{
    function crearNivel()
    {
        $levelClass = new levelClass();

        $precio = 0;
        if (isset($_POST['precio'])) {
            $precio = $_POST['precio'];
        }

        $res = $levelClass->crearNivel(
            $_POST['nombre'],
            $_POST['teoria'],
            $precio,
            $_POST["curso"]
        );

        $rows = array();
        while ($r = mysqli_fetch_assoc($res)) {
            $rows[] = $r;
        }

        $nivelCreado = $rows[0];

        if ($_FILES['foto']['size'][0] > 0) {
            $countfiles = count($_FILES['foto']['name']);
            for ($i = 0; $i < $countfiles; $i++) {
                $archivo = $_FILES['foto']['tmp_name'][$i];
                $tamanio = $_FILES['foto']['size'][$i];

                $fp = fopen($archivo, "rb");
                $fotoBlob = fread($fp, $tamanio);
                $fotoBlob = addslashes($fotoBlob);
                fclose($fp);

                $res = $levelClass->agregarImagen($nivelCreado['id_nivel'], $fotoBlob);
            }
        }


        if ($_FILES['video']['size'] > 0) {
            $countfiles = count($_FILES['video']['name']);

            for ($i = 0; $i < $countfiles; $i++) {
                $date = new DateTime("now", new DateTimeZone('America/Mexico_City'));

                $archivo = $_FILES['video']['name'][$i];
                $target_dir = "resources/";
                $target_file = $target_dir . $date->format('dmY-Gisu.') . pathinfo($archivo, PATHINFO_EXTENSION);

                if (move_uploaded_file($_FILES['video']['tmp_name'][$i], $target_file)) {
                    $res = $levelClass->agregarVideo($nivelCreado['id_nivel'],  $date->format('dmY-Gisu.') . pathinfo($archivo, PATHINFO_EXTENSION));
                }
            }
        }

        if ($_FILES['pdf']['size'] > 0) {
            $countfiles = count($_FILES['pdf']['name']);

            for ($i = 0; $i < $countfiles; $i++) {
                $date = new DateTime("now", new DateTimeZone('America/Mexico_City'));

                $archivo = $_FILES['pdf']['name'][$i];
                $target_dir = "resources/";
                $target_file = $target_dir . $date->format('dmY-Gisu.') . pathinfo($archivo, PATHINFO_EXTENSION);

                if (move_uploaded_file($_FILES['pdf']['tmp_name'][$i], $target_file)) {
                    $res = $levelClass->agregarPDF($nivelCreado['id_nivel'],  $date->format('dmY-Gisu.') . pathinfo($archivo, PATHINFO_EXTENSION));
                }
            }
        }

        if(isset($_POST['links'])){
            $ids = explode("\n", str_replace("\r", "", $_POST['links']));

            $countfiles = count($ids);
            for ($i = 0; $i < $countfiles; $i++) {

                $res = $levelClass->agregarLinks($nivelCreado['id_nivel'], $ids[$i] );
            }

        }

        header("Location: ./crearNivel.php?curso=" . $_POST["curso"] . "&creado");
    }

    function verMisNivelesDetalle()
    {
        $levelClass = new levelClass();
        $res = $levelClass->verMisNivelesDetalle($_GET["curso"]);

        $rows = array();
        while ($r = mysqli_fetch_assoc($res)) {
            $rows[] = $r;
        }

        return $rows;
    }
}

if (isset($_POST['submitCrearNivel'])) {
    $var = new nivelesApi();
    $var->crearNivel();
};
