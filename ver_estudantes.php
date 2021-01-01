<?php
    include "functions/dbh.php";

    $sql = mysqli_query($connect, "SELECT * FROM alunos order by nome_aluno");

    while($dados = $sql->fetch_assoc()){
        $id = $dados['id'];
        $nome = $dados['nome_aluno'];
        $idade = $dados['idade'];
        $telefone = $dados['telefone'];
        echo "<tr>";
            echo "<td><a href='perfil_do_estudante.php?id=$id'>$nome<a></td>";
            echo "<td>$idade</td>";
            echo "<td>$telefone</td>";
            echo"<td></td>";
            echo "<td><a href='excluir_estudante.php?id=$id'><i class='material-icons'>delete</i></td>";
            echo "<td><a href='cadastro_de_auxilios.php?id=$id'><i class='material-icons'>add</i></td>";

         
    }