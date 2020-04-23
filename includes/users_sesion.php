<?php

class UsersSesion{
    public function __construct(){
        session_start();
    }

    public function setCurrentUser($codigo){
        $_SESSION['codigoUsuario'] = $codigo;
    }

    public function getCurrentUser(){
        return $_SESSION['codigo'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }
}


?>