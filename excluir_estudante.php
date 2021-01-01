<?php 
    session_start();
    include 'functions/dbh.php';
    $adm =  $_SESSION['nome'];

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    $sql = "DELETE FROM alunos where id = '$id'";
    $result_sql= mysqli_query($connect, $sql);
    
    $connect->close();
	header('location: estudante.php');
    exit();


?>