<?php 
class Usuario{


    private $id = null;
    private $nome = null;
    private $email = null;
    private $password = null;
    private $telefone = null;
    private $celular = null;

    public function setId($id){
        $this->id = $id;

    }
    public function getId()
    {
        return $this->id;
    }
    public function setNome($nome){
        $this->nome = $nome;

    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setEmail($email){
        $this->email = $email;

    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setPassword($password){
        $this->password = $password;

    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;

    }
    public function getTelefone()
    {
        return $this->telefone;
    }
    public function setCelular($celular){
        $this->celular = $celular;

    }
    public function getCelular()
    {
        return $this->celular;
    }


}
