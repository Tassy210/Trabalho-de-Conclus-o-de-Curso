<?php

session_start();
include 'functions/dbh.php';


while($dados = $up->fetch_assoc()){
    $nome = $dados['nome'];
    $senha = $dados['senha'];
    $email = $dados['email'];
    }

  $up = mysqli_query("UPDATE administrador SET $nome ='nome', $senha ='senha', $email='email' ");
  
  
  
  if(mysql_affected_rows() > 0){
    echo "Sucesso: Atualizado corretamente!";
  }else{
    echo "Aviso: Não foi atualizado!";
  }
   
  mysql_close($connect);


?>