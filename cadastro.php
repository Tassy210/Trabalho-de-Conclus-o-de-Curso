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
<div class="container">
   <div class = "card">
    <table class="striped">
  
  <div class="container">
  <form method="POST" action="cadastrar.php">
  <br><br>
  <h6>Nome: </h6>
  <input type="text" name="nome_aluno" id="nome_aluno">
  <br><br> 
  <h6>Email: </h4>
  <input type="email" name="email_aluno" id="email_aluno">
  <br><br>
  <h6>Telefone: </h6> 
  <input type="text" name="telefone" id="telefone" placeholder="(XX) XXXX-XXXX">
  <br><br> 
  <h6>Idade: </h6>
  <input type="text" name="idade" id="idade">
  <br><br> 
  <h6>Etnia: </h6>
  <div class="input-field col s12">

    <select name="etnia">
    <option value='' selected disabled>Selecione: </option>
    <option value ='branco'>Branco </option> 
    <option value = 'preto'>Preto </optio> 
    <option value = 'pardo'>Pardo </option> 
    <option value = 'indigena'>Indígena </option>
    </select>
  </div>
  </div>

  </tbody>
      </table>

  <button type="submit" class="waves-effect waves-light purple btn">Enviar
  <i class="material-icons right">send</i>
  </button>

  </form>


</body>

</html>