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

$nome = $_SESSION['nome_aluno'];
$email = $_SESSION['email_aluno'];
$fone = $_SESSION['telefone'];
$idade = $_SESSION['idade'];

$sql="SELECT * from estudantes"

?>



<?=$_SESSION['nome_aluno'];?>
<?=$_SESSION['email_aluno'];?>
<?=$_SESSION['telefone'];?>
<?=$_SESSION['idade'];?>



</body> 