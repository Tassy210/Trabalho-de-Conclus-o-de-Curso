<?php   
session_start();
include("conexao.php");

$id = $_GET['CPF_pessoa'];

$sql = mysqli_query($con,"SELECT * from Pessoa WHERE CPF_pessoa = $id ORDER BY Nome");

while($dados = $sql->fetch_assoc()){
  
  $nome = $dados['Nome'];
  $telefone = $dados['Telefone'];
  $usuario = $dados['Usuários'];
  
  }

?>
