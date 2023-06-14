<?php
include_once 'coneccion.php';

class categoryClass extends BD
{

    function crearCategoria(
        $nombre,
        $descripcion,
        $foto,
        $id_usuario
    ) {
        $query = $this->connect()->query('CALL categoria_procedure(null, "' . $nombre . '", "' . $descripcion . '", "' . $foto . '", null, ' . $id_usuario . ', "crearCategoria");');

        return $query;
    }

    function mostrarCategorias()
    {
        $query = $this->connect()->query('CALL categoria_procedure(null, null, null, null, null, null, "verCategorias");');

        return $query;
    }

    function mostrarCategoriaEspecifica(
        $id_categoria
    ) {
        $query = $this->connect()->query('CALL categoria_procedure(' . $id_categoria . ', null, null, null, null, null, "verCategoriaEspecifica");');

        return $query;
    }

    function modificarCategoria(
        $id_categoria,
        $nombre,
        $descripcion,
        $foto
    ){
        $query = $this->connect()->query('CALL categoria_procedure('.$id_categoria.', "'.$nombre.'", "'.$descripcion.'", "'.$foto.'", null, null, "modificarCategoria");');

        return $query;

    }
}
