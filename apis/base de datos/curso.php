<?php 
    include_once 'coneccion.php';

    class courseClass extends BD{

        function crearCurso(
            $nombre,
            $descripcion,
            $foto,
            $metodoCobro,
            $metodoPago,
            $precio,
            $id_usuario
        ){
            $query = $this->connect()->query('CALL curso_procedure(null, "'.$nombre.'", "'.$descripcion.'", "'.$foto.'", "'.$metodoCobro.'", '.$metodoPago.', '.$precio.', '.$id_usuario.', null, "crearCurso");');

            return $query;

        }

    }
?>