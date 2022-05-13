<?php 

include('../functions/conexao.php');

$sql = mysqli_query($con, "SELECT CPF_pessoa, Nome FROM Pessoa WHERE Usuários = 'Cliente' order by Nome");

    while($dados = $sql->fetch_assoc()){
        $id = $dados['CPF_pessoa'];
        $nome = $dados['Nome'];

    }

        ?>

<html>
    <meta charset="UTF-8">
    
    <head>
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/style.css">
  
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
      
      
      <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
      <script src="js/bootstrap.bundle.js" ></script>
      <script src="js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"></script>
      <script src="js/bootstrap.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" ></script>
  

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script>
    $(function () {
      $('.dropdown-toggle').dropdown();
    }); 


  </script>
  
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  <style>
  
    .body{
      background-color: #E0EDFF;
    
    }
    
    
    
    
    </style>

    </head>

    <body class="body">
      <div class="container" >
        <div class="card" style="background-color: #A8C1FF;">
          <div class="card-body">  
           <h2 style="color: #ffffff;">Clientes: </h2>
          
           <div class="input-group flex-nowrap">
            <a href="../home.html"><i class="bi bi-house"></i></a>
          </div>
          </div>
        </div>
      </div>
    
       <br><br>   

        <div class="container">
            <div class="card">
              <div id="divConteudo" class="card-body">   
        <table id="tabela" class="table">
            <thead>
		
              <tr>
                <th scope="col">Nome: </th>
                <th scope="col">Usuário: </th>


              </tr>
            </thead>
            <tbody>
              <tr>
              <?echo ("<a href='perfil_cliente.php?id=$id'>$nome</a>");?>
                
              </tr>
              <tr>
                

              </tr>
              <tr>
               
              </tr>
              <tr>
                

              </tr>
              <tr>
               
              </tr>
            </tbody>
          </table>
        </div>
    </div>
    </div> 
    
    </body>
    
</html>