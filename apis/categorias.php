<?php
include_once 'base de datos/categoria.php';

class categoriasApi
{
    function crearCategoria()
    {
        $archivo = $_FILES["foto"]["tmp_name"];
        $tamanio = $_FILES["foto"]["size"];

        $fp = fopen($archivo, "rb");
        $contenido = fread($fp, $tamanio);
        $contenido = addslashes($contenido);
        fclose($fp);

        $categoryClass = new categoryClass();
        $res = $categoryClass->crearCategoria(
            $_POST['nombre'],
            $_POST['descripcion'],
            $contenido,
            $_SESSION["s_userId"]
        );

        header("Location: ./crearCategoria.php?creado");
    }

    function mostrarCategorias()
    {
        $categoryClass = new categoryClass();
        $res = $categoryClass->mostrarCategorias();

        $rows = array();
        while ($r = mysqli_fetch_assoc($res)) {
            $rows[] = $r;
        }

        return $rows;
    }

    function mostrarCategoriaEspecifica()
    {
        $categoryClass = new categoryClass();
        $res = $categoryClass->mostrarCategoriaEspecifica($_GET['categoria']);

        $rows = array();
        while ($r = mysqli_fetch_assoc($res)) {
            $rows[] = $r;
        }

        return $rows[0];
    }

    function modificarCategoria()
    {
        $contenido = "";
        if ($_FILES["foto"]["size"] > 0) {
            $archivo = $_FILES["foto"]["tmp_name"];
            $tamanio = $_FILES["foto"]["size"];

            $fp = fopen($archivo, "rb");
            $contenido = fread($fp, $tamanio);
            $contenido = addslashes($contenido);
            fclose($fp);
        }

        $categoryClass = new categoryClass();
        $res = $categoryClass->modificarCategoria(
            $_POST['id_categoria'],
            $_POST['nombre'],
            $_POST['descripcion'],
            $contenido
        );

        header("Location: ./gestionarCategorias.php?categoria=".$_POST['id_categoria']."&modificado");
    }
}

if (isset($_POST['submitCrearCategoría'])) {
    $var = new categoriasApi();
    $var->crearCategoria();
};

if (isset($_POST['submitModificarCategoría'])) {
    $var = new categoriasApi();
    $var->modificarCategoria();
};
