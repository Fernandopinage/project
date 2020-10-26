<?php

include_once "../class/classUsuario.php";
include_once "../DAO/usuarioDao.php";
$pessoa = new UsuarioDao();
$dados = $pessoa->lista();


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
            echo '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal'.$obj->getId().'">Visualizar</button>';
            echo '</td>';
            echo '<td>';
            echo'<a class="btn btn-primary" href="alunoUpdate.php?id=' . $obj->getId() . '">ALTERAR</a>';
            echo '</td>';
            echo '<td>';
            echo'<a class="btn btn-danger" onclick="deletar(' . $obj->getId() . ');">DELETAR</a>';
            echo '</td>';
            echo '</tr>';

        ?>
       

        <div class="modal fade" id="exampleModal<?php echo $obj->getId()?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <label><b>Nome:</b>&nbsp;</label><?php echo $obj->getNome() ?> </br>
            <label><b>Email:</b>&nbsp;</label><?php echo $obj->getEmail() ?> </br>
            <label><b>Telefone:</b>&nbsp;</label><?php echo $obj->getTelefone() ?> </br>
            <label><b>Celular:</b>&nbsp;</label><?php echo $obj->getCelular() ?> </br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              
            </div>
          </div>
        </div>
      </div>

        <?php
        }
        ?>


    </tbody>
</table>