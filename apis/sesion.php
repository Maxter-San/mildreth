<?php 
    include_once 'base de datos/usuario.php';

    class sesionApi{
        function loginUser(){
            $userClass = new userClass();
            $res = $userClass->login($_POST['usuario'], $_POST['password']);
            
            if(mysqli_num_rows($res) > 0){
                $rows = array();
                while($r = mysqli_fetch_assoc($res)) {
                    $rows[] = $r;
                }

                if(!$rows[0]['boolActivo']){
                    header("Location: ./logIn.php?bloqueado");
                }else{

                    $_SESSION["s_userId"]=$rows[0]['id_usuario'];
                    $_SESSION["s_userType"]=$rows[0]['rol'];

                    header("Location: ./");
                }
                
            }else{
                $res2 = $userClass->falloLogIn($_POST['usuario']);
                $rows = array();
                while($r = mysqli_fetch_assoc($res2)) {
                    $rows[] = $r;
                }

                if(!$rows[0]['boolActivo']){
                    header("Location: ./logIn.php?bloqueado");
                }else{
                    header("Location: ./logIn.php?error&paramUsuario=".$_POST['usuario']);
                }
            }
        }

        function signUpUser(){
            $userClass = new userClass();

            $archivo = $_FILES["foto"]["tmp_name"]; 
                $tamanio = $_FILES["foto"]["size"];

                $fp = fopen($archivo, "rb");
                $contenido = fread($fp, $tamanio);
                $contenido = addslashes($contenido);
                fclose($fp); 

                
            $res = $userClass->signUp($_POST['nombre'],
                                      $_POST['apellido'],
                                      $_POST['genero'],
                                      $_POST['fechaNacimiento'],
                                      $contenido,
                                      $_POST['email'],
                                      $_POST['password'],
                                      $_POST['rol']);

            header("Location: ./logIn.php?usuarioCreado");

            echo (
            $_POST['nombre'].
            $_POST['apellido'].
            $_POST['genero'].
            $_POST['fechaNacimiento'].
            $contenido.
            $_POST['email'].
            $_POST['password'].
            $_POST['rol']);
        }

        function loadUser(){
            $userClass = new userClass();
            $res = $userClass->infoUsuario($_SESSION["s_userId"]);
            
            if(mysqli_num_rows($res) > 0){
                $rows = array();
                while($r = mysqli_fetch_assoc($res)) {
                    $rows[] = $r;
                }

                return $rows[0];
                
            }else{
                return null;
                
                header("Location: ./curso.php");
            }
        }
    }

    if(isset($_POST['submitLogIn'])){
        $var = new sesionApi();
        $var->loginUser();
    };

    if(isset($_POST['submitSignUp'])){
        $var = new sesionApi();
        $var->signUpUser();
    };