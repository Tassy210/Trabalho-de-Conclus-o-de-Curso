<style>

.nav-wrapper  {
  background-color: #7a4de8;
  font-size: 32px;
  font-weight: bold;
  opacity:0.925;
}

.nav-cottent{
  background-color: #5f3db3;
  font-size: 21px;
  font-weight: bold;
  opacity:0.925;
}


    .page-footer  {
  background-color: #7a4de8;
  font-weight: bold;
  opacity:0.925;
  padding-bottom:10px; 
}

  body {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
  background-color: #FFFFFF;
}

main {
  flex: 1 0 auto;
} 

  #slider {
  max-width: 900px;
  margin: 50px auto;
}


 </style>
<nav class = "nav-extended">
    <div class="nav-wrapper">
      <a href="home.php" class="logo-container"><img src="logo.jpg" height="54px"  margin-left: "80px" margin-top:"3px"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">SIGAE
      </ul>
    </div> 
    <div class="container">
    <div class="nav-cottent">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a class="active" href="estudante.php">Estudantes cadastrados</a></li>
        <li class="tab"><a class="active" href="janela_de_auxilios.php">Auxílios cadastrados</a></li>
        <li class="tab"><a class="active" href="cadastro.php">Cadastrar estudantes</a></li>
        <li class="tab"><a class="active" href="cotas.php">Cotas</a></li>
      </ul>
    </div>
    </div>
  </nav>

    <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
      </div>
    </div></li>
    <li><a href="perfil.php" class="waves-effect"><i class="material-icons">account_circle</i>Perfil</a></li>
    <li><a href="functions/logout.php" class="waves-effect">Logout</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Desenvolvido por Leon Tassinari</a></li>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

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
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

</script>


