<?php 
    include_once 'coneccion.php';

    class userClass extends BD{

        function login(
            $mail,
            $password
        ){
            $query = $this->connect()->query('CALL usuario_procedure(null, null, null, null, null, null, "'.$mail.'", "'.$password.'", null, null, null, null, null, "logIn");');

            return $query;

        }

        function falloLogIn(
            $mail
        ){
            $query = $this->connect()->query('CALL usuario_procedure(null, null, null, null, null, null, "'.$mail.'", null, null, null, null, null, null, "falloLogIn");');

            return $query;

        }

        function signUp(
            $nombre,
            $apellido,
            $genero,
            $fechaNacimiento,
            $foto,
            $email,
            $password,
            $rol
        ){
            $query = $this->connect()->query('CALL usuario_procedure(null, "'.$nombre.'", "'.$apellido.'", "'.$genero.'", "'.$fechaNacimiento.'", "'.$foto.'", "'.$email.'", "'.$password.'", "'.$rol.'", null, null, null, null, "signUp");');

            return $query;

        }

        function infoUsuario(
            $id_usuario
        ){
            $query = $this->connect()->query('CALL usuario_procedure('.$id_usuario.', null, null, null, null, null, null, null, null, null, null, null, null, "infoUsuario");');

            return $query;

        }
    }
?>