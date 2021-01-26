<style>

.nav-wrapper  {
  background-color: #c7dcff;
  font-size: 32px;
  font-weight: bold;
  opacity:0.925;
}

.nav-cottent{
  background-color: #FFFFFF;
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


    <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
      </div>
    </div></li>
    <h5>SIGAE</h6>
    <br>
    <li> <a class="active" href="home.php"><i class="material-icons">home</i>Home</a></li>
    <li><a href="perfil.php" class="waves-effect"><i class="material-icons">account_circle</i>Perfil</a></li>
     <li class="tab"><a class="active" href="estudante.php"><i class="material-icons">people</i>Estudantes cadastrados</a></li>
     <li class="tab"><a class="active" href="janela_de_auxilios.php"><i class="material-icons">view_list</i>Auxílios cadastrados</a></li>
     <li class="tab"><a class="active" href="cadastro_de_auxilios.php"><i class="material-icons">toc</i>Cadastrar auxílios</a></li>
      <li class="tab"><a class="active" href="cadastro.php"><i class="material-icons">recent_actors</i>Cadastrar estudantes</a></li>
      <li class="tab"><a class="active" href="cotas.php"><i class="material-icons">subject</i>Cotas</a></li>
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


