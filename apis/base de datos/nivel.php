<?php 
    include_once 'coneccion.php';

    class levelClass extends BD{

        function crearNivel(
            $teoria,
            $metodoPago,
            $precio,
            $id_curso
        ){
            $query = $this->connect()->query('CALL ');

            return $query;

        }

        function verMisNiveles(
            $id_curso
        ){
            $query = $this->connect()->query('CALL nivel_procedure(null, null, null, null, '.$id_curso.', null, "verMisNiveles")');

            return $query;

        }
    }
?>