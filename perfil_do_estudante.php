<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <?php include "nav.php"?>
</head>

<body> 


<?php

session_start(); 

include "functions/dbh.php";

$id = $_GET['id'];

$sql = mysqli_query($connect, "SELECT * from alunos WHERE id = $id");

while($dados = $sql->fetch_assoc()){
  
$nome = $dados['nome_aluno'];
$email = $dados['email_aluno'];
$fone = $dados['telefone'];
$idade = $dados['idade'];

}

$sql2 =  "SELECT * from auxilios WHERE id = $id "; 


?>




<div class="container">
<div class = "card">
<div class = "container">

<h5>Dados</h5>
<br>
<h6>Nome: <?php echo $nome ?></h6> 
<br>
<h6>Idade: <?php echo $idade ?></h6>
<br>
<h6>Etnia: Branco</h6>
<br><br>
<h5>Contato</h5>
<br>
<h6>Email: <?php echo $email ?></h6>
<br>
<h6>Telefone: <?php echo $fone ?></h6>
<br>
<h5>Cotas</h5> 
<br>
<h5>Auxílios</h5>
<br>
<h6><?php echo $sql2?></h6>
<br>
<a class="btn-floating btn-small waves-effect waves-light red" href = "cadastro_de_auxilios.php"><i class="medium material-icons">add</i></a>
<a href = "cadastro_de_auxilios.php">Cadastrar auxílios</a>


</div>
</div>
</div>


</body> 