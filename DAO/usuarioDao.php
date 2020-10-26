<?php
require_once '../DAO/Dao.php';
require_once '../class/classUsuario.php';


class UsuarioDao extends Dao
{ // a classe UsuarioDao se extendendo da classe pai DAO



    public function validarUsuario($email, $pass)
    {

        $sql = "SELECT * FROM `usuarios` WHERE EMAIL_USUARIO = :nome  and  PASS_USUARIO = :pass";
        $select = $this->con->prepare($sql);
        $select->bindValue(':nome', $email);
        $select->bindValue(':pass', base64_encode($pass));
        $select->execute();

        var_dump($sql);

        if ($select->rowCount()) {


            header('location:../telas/painel.php');
        } else {


            header('location:../telas/index.php');
        }
    }

    public function InsertUsuario(Usuario $Usuario)
    {
        $sql = "INSERT INTO `usuarios`(`ID_USUARIO`, `NOME_USUARIO`, `EMAIL_USUARIO`, `PASS_USUARIO`, `TELEFONE_USUARIO`, `CELULAR_USUARIO`)
         VALUES (null,:nome, :email, :pass, :telefone, :celular);";
        $insert = $this->con->prepare($sql);
        $insert->bindValue(":nome", $Usuario->getNome());
        $insert->bindValue(":email", $Usuario->getEmail());
        $insert->bindValue(":telefone", $Usuario->getTelefone());
        $insert->bindValue(":celular", $Usuario->getCelular());
        $insert->bindValue(":pass", $Usuario->getPassword());
        $insert->execute();
        if ($insert->rowCount() > 0) {

            header('location: ../telas/painel.php');
        }
    }
}
