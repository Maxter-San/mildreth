<?php 
    include_once 'base de datos/curso.php';

    class sesionApi{
        function crearCurso(){
            $courseClass = new courseClass();
            $res = $courseClass->crearCurso($_POST['password'],
                                            $_POST['password'],
                                            $_POST['password'],
                                            $_POST['password'],
                                            $_POST['password'],
                                            $_POST['password'],
                                            $_POST['password']);
            
        }
    }
