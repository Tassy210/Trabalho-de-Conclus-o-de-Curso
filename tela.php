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

    <center>
<br>
 <div class="container">
      <div class="container">
      <div class="card">
        <div class="card-image">
        </div>
        <div class="container">
        <div class="card-content">
        <div class="card-content">
        <center>

        <h5>Olá administrador@ </h5>          
        </center>

        <form method = "POST" action="functions/login_adm.php">
	       <div class="">
        	<br><br><br><br>
            Nome:
         	<br>
            <input name="nome" type="text">
        	<br><br><br>
            Senha: 
        	<br>
            <input name="senha" type="password">

            <button class="btn waves-effect waves-default center-align " style="background-color: #7a4de8" type="submit" name="submit" >Logar
            <i class="material-icons">done</i></button>
          </form>

    </body>


</html>