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

    <?php include_once("nav.php")?>

</head>


<body class="nav-wrapper">

 <!--JavaScript at end of body for optimized loading-->
 <script type="text/javascript" src="js/materialize.min.js"></script>

 <script>
options = { hover: true, coverTrigger: false}
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
  });
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);
  });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });

  

</script>


<ul class="collapsible">
  <li>
    <div class="collapsible-header">
      <h4>Cota L1</h4>
      <span class=badge></span></div>
    <div class="collapsible-body"><h5>Candidatos com renda familiar bruta per capita igual ou inferior a 1,5 salário mínimo, que tenham cursado integralmente o ensino médio em escolas públicas.</h5></div>
  </li>
  <li>
    <div class="collapsible-header">
      <h4>Cota L2</h4>
      <span class="badge"></span></div>
    <div class="collapsible-body"><h5>Candidatos autodeclarados pretos, pardos ou indígenas, com renda familiar bruta per capita igual ou inferior a 1,5 salário mínimo e que tenham cursado integralmente o ensino médio em escola pública.</h5></div>
  </li>
  <li>
    <div class="collapsible-header">
      <h4>Cota L5</h4>
      <span class="badge"></span></div>
    <div class="collapsible-body"><h5>Candidatos que, independente da renda, tenham cursado integralmente o ensino médio em escolas públicas.</h5></div>
  </li>
  <li>
    <div class="collapsible-header">
      <h4>Cota L6</h4>
      <span class="badge"></span></div>
    <div class="collapsible-body"><h5>Candidatos autodeclarados pretos, pardos ou indígenas que, independente da renda, tenham cursado integralmente o ensino médio em escolas públicas.</h5></div>
  </li>
  <li>
    <div class="collapsible-header">
      <h4>Cota L9</h4>
      <span class="badge"></span></div>
    <div class="collapsible-body"><h5> Candidatos com deficiência que tenha renda familiar bruta per capita igual ou inferior a 1,5 salário mínimo, que tenham cursado integralmente o ensino médio em escolas públicas.</h5></div>
  </li>
  <li>
    <div class="collapsible-header">
      <h4>Cota L10</h4>
      <span class="badge"></span></div>
    <div class="collapsible-body"><h5>Candidatos com deficiência autodeclarados pretos, pardos ou indígenas, com renda familiar bruta per capita igual ou inferior a 1,5 salário mínimo e que tenham cursado integralmente o ensino médio em escola pública.</h5></div>
  </li>
  <li>
    <div class="collapsible-header">
      <h4>Cota L13</h4>
      <span class="badge"></span></div>
    <div class="collapsible-body"><h5>Candidatos com deficiência que, independente da renda, tenham cursado integralmente o ensino médio em escolas públicas.</h5></div>
  </li>
  <li>
    <div class="collapsible-header">
      <h4>Cota L14</h4>
      <span class="badge"></span></div>
    <div class="collapsible-body"><h5>Candidatos com deficiência autodeclarados pretos, pardos ou indígenas que, independente da renda, tenham cursado integralmente o ensino médio em escolas públicas.</h5></div>
  </li>
</ul>

</body>