<?php

require_once '../class/classUsuario.php';
require_once '../DAO/usuarioDao.php';


if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['celular']) && isset($_POST['password'])) {

    $Usuario = new Usuario();
    $Usuario->setNome($_POST['nome']);
    $Usuario->setEmail($_POST['email']);
    $Usuario->setTelefone($_POST['telefone']);
    $Usuario->setCelular($_POST['celular']);
    $Usuario->setPassword(base64_encode($_POST['password']));
    $Usuario->setStatus($_POST['stts']);

    $pessoa = new UsuarioDao();
    if ($pessoa->InsertUsuario($Usuario)) {
        echo "<script>alert('USUÁRIO INSERIDO COM SUCESSO!');</script>";
    } else {

        echo "<script>alert('NÃO FOI POSSÍVEL INSERIR CURSO!');</script>";
    }
}

?>


<div class="card bg-light mb-3" style="max-width: 108rem;">
    <div class="card-header">
        <h5 class="card-title">Novo Usuário</h5>
    </div>
    <div class="card-body">

        <form action="../telas/add.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Email" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Celular</label>
                    <input type="text" class="form-control" name="celular" id="celular" placeholder="celular" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Telefone</label>
                    <input type="telefone" class="form-control" name="telefone" id="telefone" placeholder="Telefone" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Status</label>
                    <select class="form-control" name="stts">
                        <option>ADM</option>
                        <option>GERENTE</option>
                        <option>OPERADOR</option>
                    </select>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>