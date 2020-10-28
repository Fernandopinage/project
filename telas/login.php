<?php

session_start();
require_once "../DAO/usuarioDao.php";

$Pessoa = new UsuarioDao();
   
if(isset($_POST['enviar'])){
   $email = $_POST['email'];
   $pass = $_POST['pass'];  
}
$v_res = $Pessoa->validarUsuario($email,$pass);
 
if ($v_res) {
    $_SESSION["nome"] = $v_res->getNome();
    $_SESSION["perfil"] = $v_res->getStatus();
  
    header('LOCATION:painel.php');
} else {
    //$_SESSION["msg"] = $v_res["usr_msg"];
    //$_SESSION["s_usuario"] = NULL;
    //$_SESSION["s_loginusuario"] = NULL;
   
    header('LOCATION:index.php');
    session_destroy();
}
?>