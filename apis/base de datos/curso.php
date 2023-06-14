<?php 
    include_once 'coneccion.php';

    class courseClass extends BD{

        function crearCurso(
            $nombre,
            $descripcion,
            $foto,
            $metodoCobro,
            $precio,
            $id_usuario
        ){
            $query = $this->connect()->query('CALL curso_procedure(null, "'.$nombre.'", "'.$descripcion.'", "'.$foto.'", "'.$metodoCobro.'", 1, '.$precio.', '.$id_usuario.', null, "crearCurso");');

            return $query;

        }

        function verMisCursos(
            $id_usuario
        ){
            $query = $this->connect()->query('CALL curso_procedure(null, null, null, null, null, null, null, '.$id_usuario.', null, "verMisCursos");');

            return $query;

        }

    }
?>