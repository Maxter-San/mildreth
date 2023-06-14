<?php 
    include_once 'coneccion.php';

    class levelClass extends BD{

        function crearNivel(
            $nombre,
            $teoria,
            $precio,
            $id_curso
        ){
            $query = $this->connect()->query('CALL nivel_procedure(null, "'.$nombre.'", "'.$teoria.'", 1, '.$precio.', '.$id_curso.', null, null, null, null, null, "crearNivel")');

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

        function agregarPDF(
            $id_nivel,
            $pdf
        ){
            $query = $this->connect()->query('CALL nivel_procedure('.$id_nivel.', null, null, null, null, null, null, "'.$pdf.'", null, null, null, "agregarPDF")');

            return $query;

        }

        function agregarLinks(
            $id_nivel,
            $link
        ){
            $query = $this->connect()->query('CALL nivel_procedure('.$id_nivel.', null, null, null, null, null, null, null, "'.$link.'", null, null, "agregarLink")');

            return $query;

        }

        function verMisNivelesDetalle(
            $id_curso
        ){
            $query = $this->connect()->query('CALL nivel_procedure(null, null, null, null, null, '.$id_curso.', null, null, null, null, null, "nivelDetalle")');

            return $query;

        }
    }
?>