<?php

session_start(); 

include "functions/dbh.php";



$sql = mysqli_query($connect, "SELECT * from auxilios order by tipo");

while($dados = $sql->fetch_assoc()){
  
$id_aluno = $dados['id_aluno'];
$nome = $dados['nome_aluno'];
$tipo = $dados['tipo'];

echo "<tr>";

echo "<td><a href='perfil_do_estudante.php?id=$id_aluno'>$nome</td>";
echo "<td>$tipo</td>";


}

?>