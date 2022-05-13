<?php

include('lista_clientes.php');

?>

<html>
    <meta charset = "utf-8">

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

    <style>
  
      .body{
        background-color: #E0EDFF;
      
      }
      
      img    {
       border-radius: 50%;  

      }
      
      
      </style>

<div class="container" >
  <div class="card" style="background-color: #A8C1FF;">
    <div class="card-body">  
      <div class="input-group flex-nowrap">
       <a href="cliente_r.html">voltar</a>
    </div>
    </div>
  </div>
</div> 

</head>

<body class="body">

  <br>

<div class="container">
  <div class="card">
    <div class="card-body">

      <h4>Dados: </h4>

      <BR>

      <h6>Nome: <?php echo $nome;?></h6>
      <br>
      <h6>CPF: </h6>
      <br>
      <h6>Endereço: <?php echo $usuario;?></h6>
      <br>
      <h6>Contato: <?php echo $telefone;?></h6>

      <hr>

      <h4>Documentos vinculados: </h4>
      <br>
      <h6>Contas de luz: </h6>
      <br>
      <h6>Orçamentos: </h6>
      <br>
      <h6>Listas de materiais: </h6>
      <br>
      <h6>Contratos vinculados: </h6>
      <br>
      <h6>Levantamento: </h6>
      
      <hr>

      <h4>Pós-venda: </h4>
      <br>
      <h6>Folhas de vistoria: </h6>
      <br>
      <h6>Pedido de compra: </h6>
      <br>

    </div>
  </div>
</div>

</body>



</html>