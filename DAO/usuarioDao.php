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
        
        $array = array();
        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
            $pessoa = new Usuario();

            $pessoa->setId($row["ID_USUARIO"]);
            $pessoa->setNome($row["NOME_USUARIO"]);
            $pessoa->setEmail($row["EMAIL_USUARIO"]);
            $pessoa->setPassword($row["PASS_USUARIO"]);
            $pessoa->setTelefone($row["TELEFONE_USUARIO"]);
            $pessoa->setCelular($row["CELULAR_USUARIO"]);
            $pessoa->setStatus($row["STATUS_USUARIO"]);
            //$array[] = $pessoa;
        }
        //var_dump($array);exit();
        return $pessoa;

        /** if ($select->rowCount()) {
            header('location:../telas/painel.php');
        } else {
            header('location:../telas/index.php');
        } **/
    }

    public function InsertUsuario(Usuario $Usuario)
    {
        $sql = "INSERT INTO `usuarios`(`ID_USUARIO`, `NOME_USUARIO`, `EMAIL_USUARIO`, `PASS_USUARIO`, `TELEFONE_USUARIO`, `CELULAR_USUARIO`, `STATUS_USUARIO`)
         VALUES (null,:nome, :email, :pass, :telefone, :celular, :stt);";
        $insert = $this->con->prepare($sql);
        $insert->bindValue(":nome", $Usuario->getNome());
        $insert->bindValue(":email", $Usuario->getEmail());
        $insert->bindValue(":telefone", $Usuario->getTelefone());
        $insert->bindValue(":celular", $Usuario->getCelular());
        $insert->bindValue(":pass", $Usuario->getPassword());
        $insert->bindValue(":stt", $Usuario->getStatus());
        $insert->execute();
        if ($insert->rowCount() > 0) {

            header('location: ../telas/painel.php?p=add');
        }
    }

    public function lista(){

        $sql = "SELECT * FROM `usuarios` WHERE 1";
        $select = $this->con->prepare($sql);
        $select->execute();
        $array = array();
        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
            $pessoa = new Usuario();

            $pessoa->setId($row["ID_USUARIO"]);
            $pessoa->setNome($row["NOME_USUARIO"]);
            $pessoa->setEmail($row["EMAIL_USUARIO"]);
            $pessoa->setPassword($row["PASS_USUARIO"]);
            $pessoa->setTelefone($row["TELEFONE_USUARIO"]);
            $pessoa->setCelular($row["CELULAR_USUARIO"]);
            $pessoa->setStatus($row["STATUS_USUARIO"]);
            $array[] = $pessoa;
        }
        return $array;

    }

    public function editar(Usuario $Usuario){

        $sql ="UPDATE `usuarios` SET `NOME_USUARIO`= :nome,`EMAIL_USUARIO`= :email, `PASS_USUARIO` =:pass, `TELEFONE_USUARIO`= :telefone,`CELULAR_USUARIO`= :celular, `STATUS_USUARIO` = :stts WHERE `ID_USUARIO`= :id";
        $update = $this->con->prepare($sql);
        $update->bindValue(":nome", $Usuario->getNome());
        $update->bindValue(":email", $Usuario->getEmail());
        $update->bindValue(":pass", $Usuario->getPassword());
        $update->bindValue(":telefone", $Usuario->getTelefone());
        $update->bindValue(":celular", $Usuario->getCelular());
        $update->bindValue(":id", $Usuario->getId());
        $update->bindValue(":stts", $Usuario->getStatus());
        $update->execute();
        
        if ($update->rowCount() > 0) {

            header('location: ../telas/painel.php?p=lista');
        }else{
            echo 'fudeu';
        }

    }

    public function delete($id){

        echo $id;
    }
}
