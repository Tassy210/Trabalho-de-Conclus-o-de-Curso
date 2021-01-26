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

    <body class="nav-wrapper"> 

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <div class = "card">
<table class ="striped">

          <tr>
              <th>Nome</th>
              <th>Tipo de auxílio</th>
          </tr>
        </thead>

        <tbody>
         <tr>

          <?php include "ver_auxilios.php"?>

         </tr>
        </tbody>
      </table>
      </div>

    <br>
    <a href = "cadastro_de_auxilios.php">Cadastrar auxílio</a>

    </body>

  </html>