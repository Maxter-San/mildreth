<?php 
    include_once './dataBase/userClass.php';

    class sesionApi{
        function loginUser(){
            echo ("aaaaaaaaaaaaaaaaaa");
        }
    }

    if(isset($_POST['buttonComprarCurso'])){
        $var = new sesionApi();

        $var->loginUser();
    };

?>