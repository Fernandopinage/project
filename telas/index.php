<?php
// LE OS DADOS DA SESSAO
session_start();

// VERIFICA SE HA REGISTRO DE VARIAVEL DE SESSAO
if(!isset($_SESSION['nome'])){ 
    session_destroy();
}

require_once "../class/classUsuario.php";
require_once "../DAO/usuarioDao.php";

if(isset($_POST['enviar'])){
   $email = $_POST['email'];
   $pass = $_POST['pass'];

   $Pessoa = new UsuarioDao();
   $Pessoa->validarUsuario($email,$pass);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Document</title>
</head>

<body>

    <div class="login">
        <div class="login-triangle"></div>

        <h2 class="login-header">Login</h2>

        <form class="login-container" action="login.php" method="POST">
            <p><input type="email" placeholder="Email" name="email"></p>
            <p><input type="password" placeholder="Password" name="pass"></p>
            <p><input type="submit" name="enviar" value="Conecte-se"></p>
        </form>
    </div>
</body>

</html>