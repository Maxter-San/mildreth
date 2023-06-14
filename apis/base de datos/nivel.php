<?php 
    include_once 'coneccion.php';

    class levelClass extends BD{

        function crearNivel(
            $teoria,
            $metodoPago,
            $precio,
            $id_curso
        ){
            $query = $this->connect()->query('CALL nivel_procedure(null, null, "'.$teoria.'", 1, '.$precio.', '.$id_curso.', null, null, null, null, null, "crearNivel")');

            return $query;

        }

        function verMisNiveles(
            $id_curso
        ){
            $query = $this->connect()->query('CALL nivel_procedure(null, null, null, null, null, '.$id_curso.', null, null, null, null, null, "verMisNiveles")');

            return $query;

        }

        function agregarImagen(
            $id_nivel,
            $imagen
        ){
            $query = $this->connect()->query('CALL nivel_procedure('.$id_nivel.', null, null, null, null, null, null, null, null, "'.$imagen.'", null, "agregarImagen")');

            return $query;

        }

        function agregarVideo(
            $id_nivel,
            $video
        ){
            $query = $this->connect()->query('CALL nivel_procedure('.$id_nivel.', null, null, null, null, null, null, null, null, null, "'.$video.'", "agregarVideo")');

            return $query;

        }
    }
?>