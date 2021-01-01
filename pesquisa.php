<?php

include 'functions/dbh.php';

$pesquisa = $_POST['pesquisar'];
$result_aluno = "SELECT * FROM alunos WHERE nome_aluno LIKE '%$pesquisar%' ";
$resultado = mysqli_querry($connect, $result_aluno);

    while($row_aluno=mysqli_fetch_array($result_aluno)){
    echo "Nome do aluno: ".$row_aluno['$nome_aluno']."<br>";
    }

?>