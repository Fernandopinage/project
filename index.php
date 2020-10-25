<?php

require_once "../project/class/classUsuario.php";
require_once "../project/DAO/usuarioDao.php";

if(isset($_POST['email']) && isset($_POST['password'])){

    $Usuario = new Usuario();
    
    $Usuario->setEmail($_POST['email']);
    $Usuario->setPassword(base64_encode($_POST['password']));
 
    $pessoa = new UsuarioDao();
    $pessoa->InsertUsuario($Usuario);
 }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../projeto/css/index.css">
    <title>Document</title>
</head>

<body>

    <div class="login">
        <div class="login-triangle"></div>

        <h2 class="login-header">Login</h2>

        <form class="login-container" action="../PROJETO/index.php" method="POST">
            <p><input type="email" placeholder="Email" name="email"></p>
            <p><input type="password" placeholder="Password" name="pass"></p>
            <p><input type="submit" value="Conecte-se"></p>
        </form>
    </div>
</body>

</html>