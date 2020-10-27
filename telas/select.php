<?php

include_once "../class/classUsuario.php";
include_once "../DAO/usuarioDao.php";
$pessoa = new UsuarioDao();
$dados = $pessoa->lista();


if(isset($_POST['submit'])){

  $Usuario = new Usuario();
  $Usuario->setNome($_POST['id']);
  $Usuario->setNome($_POST['nome']);
  $Usuario->setEmail($_POST['email']);
  $Usuario->setTelefone($_POST['telefone']);
  $Usuario->setCelular($_POST['celular']);
  

  $pessoa = new UsuarioDao();
  $pessoa->InsertUsuario($Usuario);

}

?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nome</th>
      <th scope="col">Visualizar</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>

    <?php
    foreach ($dados as $i => $obj) {
      echo '<tr>';
      echo '<td>';
      echo $obj->getId();
      echo '</td>';
      echo '<td>';
      echo $obj->getNome();
      echo '</td>';

      echo '<td>';
      echo '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal' . $obj->getId() . '">Visualizar</button>';
      echo '</td>';
      echo '<td>';
      echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar' . $obj->getId() . '">Editar</button>';
      echo '</td>';
      echo '<td>';
      echo '<a class="btn btn-danger" onclick="deletar(' . $obj->getId() . ');">DELETAR</a>';
      echo '</td>';
      echo '</tr>';

    ?>

      <!-- Modal visualizar-->
      <div class="modal fade" id="exampleModal<?php echo $obj->getId() ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <label><b>Codigo:</b>&nbsp;</label><?php echo $obj->getId() ?> </br>
              <label><b>Nome:</b>&nbsp;</label><?php echo $obj->getNome() ?> </br>
              <label><b>Email:</b>&nbsp;</label><?php echo $obj->getEmail() ?> </br>
              <label><b>Telefone:</b>&nbsp;</label><?php echo $obj->getTelefone() ?> </br>
              <label><b>Celular:</b>&nbsp;</label><?php echo $obj->getCelular() ?> </br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

            </div>
          </div>
        </div>
      </div>
      <!-- fim modal -->
      <div class="modal fade" id="editar<?php echo $obj->getId() ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar Registro</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="http://localhost/project/telas/painel.php?p=lista" method="POST">
                <input type="hidden" class="form-control" name="id" value="<?php echo $obj->getId() ?>">
                <label><b>Nome:</b>&nbsp;</label><input type="text" class="form-control" name="nome" value="<?php echo $obj->getNome() ?>">
           
                <label><b>Email:</b>&nbsp;</label><input type="text" class="form-control" name="email" value="<?php echo $obj->getEmail() ?>">
                <label><b>Telefone:</b>&nbsp;</label><input type="text" class="form-control" name="telefone" value="<?php echo $obj->getTelefone() ?>">
                <label><b>Celular:</b>&nbsp;</label><input type="text" class="form-control" name="celular" value="<?php echo $obj->getCelular() ?>">
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="submit">Salvar</button>
                </div>
              </form>

            </div>

          </div>
        </div>
      </div>

    <?php
    }
    ?>


  </tbody>
</table>