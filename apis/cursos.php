<?php
include_once 'base de datos/curso.php';
include_once 'base de datos/categoria.php';

class cursosApi
{
    function crearCurso()
    {
        $archivo = $_FILES["foto"]["tmp_name"];
        $tamanio = $_FILES["foto"]["size"];

        $fp = fopen($archivo, "rb");
        $contenido = fread($fp, $tamanio);
        $contenido = addslashes($contenido);
        fclose($fp);

        $precio = 0;

        if (isset($_POST['precio'])) {
            $precio = $_POST['precio'];
        }

        $courseClass = new courseClass();
        $res = $courseClass->crearCurso(
            $_POST['nombre'],
            $_POST['descripcion'],
            $contenido,
            $_POST['cobro'],
            $precio,
            $_SESSION["s_userId"]
        );

        $rows = array();
        while ($r = mysqli_fetch_assoc($res)) {
            $rows[] = $r;
        }

        $id_curso = $rows[0]['id_curso'];



        $categoryClass = new categoryClass();
        $res = $categoryClass->mostrarCategorias();
        $rows = array();
        while ($r = mysqli_fetch_assoc($res)) {
            $rows[] = $r;
        }

        for ($i = 0; $i < count($rows); $i++) {
            if (isset($_POST[$rows[$i]['id_categoria']])) {
                $res = $courseClass->cursoCategoria(
                    $id_curso,
                    $rows[$i]['id_categoria']
                );
            }
        }
    }

    function verMisCursos()
    {
        $courseClass = new courseClass();
        $res = $courseClass->verMisCursos($_SESSION["s_userId"]);

        $rows = array();
        while ($r = mysqli_fetch_assoc($res)) {
            $rows[] = $r;
        }

        return $rows;
    }

    function borrarCurso()
    {
        $courseClass = new courseClass();
        $res = $courseClass->eliminarCurso($_POST["id_curso"]);

        header("Location: ./crearCurso.php?creado");
    }
}

if (isset($_POST['submitCrearCurso'])) {
    $var = new cursosApi();
    $var->crearCurso();
};

if (isset($_POST['submit-eliminar-curso'])) {
    $var = new cursosApi();
    $var->borrarCurso();
};
