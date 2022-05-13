<html>
<meta charset="UTF-8">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<script>
  $(function () {
    $('.dropdown-toggle').dropdown();
  }); 

  $('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  e.target // newly activated tab
  e.relatedTarget // previous active tab
})
</script>


<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<style>

.body{
  background-color: #E0EDFF;

}




</style>

<div class="container" >
    <div class="card" style="background-color: #A8C1FF;">
      <div class="card-body">  
       <h2 style="color: #ffffff;">Cadastro de cliente</h2>
       <p style="color: #ffffff;">Cadastro de dados do cliente para a realização da instalação</p>
       <div class="input-group flex-nowrap">
        <a href="../home.html"><i class="bi bi-house"></i></a>
      </div>
      </div>
    </div>
  </div> 
  
  <br>

</head>

<body class="body">


    <br><br>
    
    <form method="POST" action = "../functions/cliente_c_2.php">

    <div class="container">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="1-tab" data-toggle="tab" href="cliente_c_2.php" role="tab" aria-controls="home">Anexos</a>
          </li>  
        
          <li class="nav-item">
            <a class="nav-link" id="2-tab" data-toggle="tab" href="cliente_c_3.php" role="tab" aria-controls="profile" aria-selected="true">Venda fechada</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="3-tab" data-toggle="tab" href="cliente_c_1.php" role="tab" aria-controls="contact" aria-selected="false">Cadastro de cliente</a>
          </li>
        
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="1-tab">Anexos: </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="2-tab">...</div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="3-tab">...</div>
        </div>

        <br>

        <div class="card">
            <div class="card-body">   
                
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
              </div>  
            <br><br>
                <form>
                 
                    <div class="input-group mb-3">
                      <label class="input-group-text" for="inputGroupFile01">Orçamento: </label>
                      <input type="file" name="orcamento" class="form-control" id="inputGroupFile01">
                    </div>

                    <br><br>

                                        
                    <div class="input-group mb-3">
                      <label class="input-group-text" for="inputGroupFile01">Materiais: </label>
                      <input type="file" name="materiais" class="form-control" id="inputGroupFile01">
                    </div>

                    <div>
                      <input type="submit" class="btn btn-outline-primary" value="Cadastrar">
                    </div>
    <br><br>
           
                </div>
            </div> 
            </div>

        

<br><br>
          </form>

</div>


<br><br>

<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <br>
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i> Marsol Energia Solar
            </h6>
            <p>
              pipipi popopo
            </p>
          </div>
          
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contatos
            </h6>
            <p><i class="fas fa-home me-3"></i> R. Artur Milani, 177 - Ipiranga, Frederico Westphallen</p>
           
            <p><i class="fas fa-phone me-3"></i> (55) 3744-6978</p>
        
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2022 Copyright
    </div>
  
  </footer>

</body>



</html>