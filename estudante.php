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

    

    <br><br>

   <div class="container">
   <div class = "card">
    <table class="striped">
        <thead>
        <h3>Pesquisar estudante: </h3>
        <div class="col s9">
        <form method="POST" action="pesquisa.php">
                <div class="input-field">
                  <input name="pesquisar" type="search" required>
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
      </form>
        </div>
          <tr>
              <th>Nome</th>
              <th>Idade</th>
              <th>Telefone</th>
              <th>Etnia</th>
          </tr>
        </thead>

        <tbody>
         <tr>

          <?php include "ver_estudantes.php"?>

         </tr>
        </tbody>
      </table>
</div>
</div>
    


    </body>


</html>