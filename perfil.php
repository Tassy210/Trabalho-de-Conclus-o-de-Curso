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

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
    <?php
    
    session_start(); 

    include "functions/dbh.php";

    $nome = $_SESSION['nome'];
    $senha = $_SESSION['senha'];
    $email = $_SESSION['email'];
  

    
    ?>
    
    <div class="container">
   <div class = "card">


    <div class = "container">
    <input type = "text" value = "Usuário: <?=$_SESSION['nome'];?>"></input>
    <input type = "text" value = "Senha: <?=$_SESSION['senha'];?>"></input>
    <input type = "text" value = "Email: <?=$_SESSION['email'];?>"></input>

    <form action="edit_perfil.php">
    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
    <button type="submit" class="waves-effect waves-light purple btn">Enviar
  <i class="material-icons right">send</i>
  </button>
  </form>
</div>
</div>
</div>
  
    </body>


</html>