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
            $query = $this->connect()->query('CALL curso_procedure(null, "'.$nombre.'", "'.$descripcion.'", "'.$foto.'", "'.$metodoCobro.'", '.$precio.', '.$id_usuario.', null, "crearCurso");');

            return $query;

        }

        function cursoCategoria(
            $id_curso,
            $id_categoria
        ){
            $query = $this->connect()->query('CALL categoria_procedure('.$id_categoria.', null, null, null, '.$id_curso.', null, "cursoCategoria");');

            return $query;

        }

        function verMisCursos(
            $id_usuario
        ){
            $query = $this->connect()->query('CALL curso_procedure(null, null, null, null, null, null, '.$id_usuario.', null, "verMisCursos");');

            return $query;

        }

        function eliminarCurso(
            $id_curso
        ){  
            $query = $this->connect()->query('CALL curso_procedure('.$id_curso.', null, null, null, null, null, null, null, "EliminarCurso");');

            return $query;

        }

    }
?>