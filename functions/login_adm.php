<?php

session_start();
include_once "dbh.php";

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_SESSION['email'];
unset($_SESSION['ERROS']);
if(empty($nome) or empty($senha)){
    $_SESSION['ERROS'] = "Campos não podem se nulos";
   	header("location:../tela.php?erro ");
   	exit();  
}
$nome = mysqli_real_escape_string($connect,$nome);
$senha  = mysqli_real_escape_string($connect,$senha);
$query = "SELECT * from administrador where nome = '{$nome}' and senha = '{$senha}' ";
       
       
      $result = mysqli_query($connect, $query) or die (mysqli_error($connect));
      $row = mysqli_num_rows($result);
      $user=mysqli_fetch_assoc($result);

      if ($row == 1){ 
        
        $_SESSION['nome']=$user['nome'];
        $_SESSION['senha']=$user['senha'];
        header('location: ../home.php');
        exit();
    } else {
        header('location: ../tela.php');
        exit();
    }


?>