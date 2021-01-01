<?php

include 'functions/dbh.php';

            $nome = mysqli_real_escape_string($connect,$_POST['nome_aluno']);
            $email = mysqli_real_escape_string($connect,$_POST['email_aluno']);
            $telefone = mysqli_real_escape_string($connect,$_POST['telefone']);
            $idade = mysqli_real_escape_string($connect,$_POST['idade']);
            $etnia = mysqli_real_escape_string($connect,$_POST['etnia']);



    $sql = "INSERT INTO alunos (nome_aluno, email_aluno, telefone, idade, etnia) values ('$nome', '$email', '$telefone', '$idade', '$etnia')";
    $result_perfil = mysqli_query($connect, $sql);

    mysqli_close($connect);
    header('location: home.php');
		exit();

?>