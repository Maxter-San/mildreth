<?php
include_once 'base de datos/curso.php';

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

        $courseClass = new courseClass();
        $res = $courseClass->crearCurso(
            $_POST['nombre'],
            $_POST['descripcion'],
            $contenido,
            $_POST['cobro'],
            $_POST['precio'],
            $_SESSION["s_userId"]
        );
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
}

if (isset($_POST['submitCrearCurso'])) {
    $var = new cursosApi();
    $var->crearCurso();
};
