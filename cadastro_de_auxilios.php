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
  <form method="POST" action="cadastrar_auxilio.php">
  <br><br>
  <h6> Nome do estudante: </h6>
  <div class="input-field col s12">
    <select>
    <option value="1"><?php echo "$nome"?></option>
    </select>
</div>
  <br><br> 
  <h6> Cota (Se pertencer): </h6>
  <label>
            <input type="checkbox" name="ofense" id="denuncia" value="1" class="filled-in" />
            <span>L1</span>
          </label>
        </p>
        <p>
          <label>
            <input type="checkbox" name="word" id="denuncia" value="2" class="filled-in" />
            <span>L2</span>
          </label>
        </p>
        <p>
          <label>
            <input type="checkbox" name="nude" id="denuncia" value="3" class="filled-in" />
            <span>L5</span>
          </label>
        </p>
        <p>
          <label>
            <input type="checkbox" name="exposed" id="denuncia" value="4" class="filled-in"  />
            <span>L6</span>
          </label>
        </p>
        <p>
          <label>
            <input type="checkbox" name="exposed" id="denuncia" value="4" class="filled-in"  />
            <span>L9</span>
          </label>
        </p>
        <p>
          <label>
            <input type="checkbox" name="exposed" id="denuncia" value="4" class="filled-in"  />
            <span>L10</span>
          </label>
        </p>
        <p>
          <label>
            <input type="checkbox" name="exposed" id="denuncia" value="4" class="filled-in"  />
            <span>L13</span>
          </label>
        </p>
        <p>
          <label>
            <input type="checkbox" name="exposed" id="denuncia" value="4" class="filled-in"  />
            <span>L14</span>
          </label>
        </p>
  <h6>Tipo de auxílio: </h6>
  <div class="input-field col s12">
    <select>
      <option value="1">Moradia estudantil</option>
      <option value="2">Alimentação</option>
      <option value="3">Transporte</option>
      <option value="4">Saúde</option>

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