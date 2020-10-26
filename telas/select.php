<?php

include_once "../class/classUsuario.php";
include_once "../DAO/usuarioDao.php";
$pessoa = new UsuarioDao();
$dados = $pessoa->lista();


?>

<table class="table">
    <thead class="thead-light">
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
            echo '<a class="btn btn-outline-success" href="alunoUpdate.php?id=' . $obj->getId() . '">VISUALIZAR</a>';
            echo '</td>';
            echo '<td>';
            echo'<a class="btn btn-outline-primary" href="alunoUpdate.php?id=' . $obj->getId() . '">ALTERAR</a>';
            echo '</td>';
            echo '<td>';
            echo'<a class="btn btn-outline-danger" onclick="deletar(' . $obj->getId() . ');">DELETAR</a>';
            echo '</td>';
            echo '</tr>';
        }
        ?>


    </tbody>
</table>