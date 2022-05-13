<html>
<meta charset="UTF-8">
<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  
  
  <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

function teste(){

      var x = document.getElementById('pagamento').value;

      if(x == "4"){
      document.getElementById('pagamento').insertAdjacentHTML('afterend',"<html><div id ='parcela' ><br><label for='parcelado'>Selecione o nº de parcelas: </label>  <select class='form-select'><option>1 parcela</option><option>2 parcelas</option><option>3 parcelas</option><option>4 parcelas</option></select></div></htmL");
  }

}


function teste2(){

      var x = document.getElementById('padrao').value;

      if(x == true){
      document.getElementById('padrao').insertAdjacentHTML('afterend',"<html><div id ='parcela' ><br><label for='parcelado'>Padrão: </label><input type='text' class='form-control'></></div></htmL");

    }

}

function removerCampo(){

      document.getElementById('parcela').remove();

}


</script>

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
    
    
    <div class="container">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="1-tab" data-toggle="tab" href="cliente_c_3.php" role="tab" aria-controls="home">Venda fechada</a>
          </li>  
        
          <li class="nav-item">
            <a class="nav-link" id="2-tab" data-toggle="tab" href="cliente_c_1.php" role="tab" aria-controls="profile" aria-selected="true">Cadastro de cliente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="3-tab" data-toggle="tab" href="cliente_c_2.php" role="tab" aria-controls="contact" aria-selected="false">Anexos</a>
          </li>
        
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="1-tab">Venda fechada: </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="2-tab">...</div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="3-tab">...</div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">   
                
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
              </div>  
<br><br>

                <form method = "POST" action = "../functions/cliente_c_3.php">

                  <div class="input-group mb-3">

                    <label class="input-group-text" for="contrato">Contrato: </label>
                    <br>  
                    <input type="file"class="form-control" name="contrato">
                    <br><br>
                  </div>

                  <br> 
                
            <div class="input-group mb-3">
              <label class="input-group-text" for="levantamento">Levantamento: </label>
              <br>  
              <input type="file" class="form-control" name="levantamento">
              <br><br>
            </div>

            <br> 

            <div class="input-group mb-3">
              <label class="input-group-text" for="f_vistoria">Folha de vistoria: </label>
              <input type="file" class="form-control" id="f_vistoria">
            </div>
          
            <br>
          
            <div class="input-group mb-3">
              <label class="input-group-text" for="f_vistoria">Pedido de compra: </label>
              <input type="file" class="form-control" id="compra">
            </div>

            <br>

            <div>

              <label for="pagamento">Forma de pagamento: </label>

              <div class="form-group col-md-3">
                <select class="form-select" name="pagamento" id="pagamento">
                   <option value="1" onclick = "removerCampo()">À vista</option>
                   <option value="2" onclick = "removerCampo()">Após instalação</option>
                   <option value="3" onclick = "removerCampo()">Financiamento Bancário</option>
                   <option value="4"  onclick = "teste()">Parcelado</option>
               </select>

              </div>

              <br>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="padrao">
                <label class="form-check-label" for="padrao">
                  Adequação de padrão? 
                </label>
              </div>

            </div>

            <br>

            <div>

              <label for="material">Lista de materiais: </label>
              <ul class="list-group">
                <li class="list-group-item">Placas X</li>
                <li class="list-group-item">Brasilite X</li>
                <li class="list-group-item">Inversor X</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
          
            </div>
          
            <br> 
          
            <div>
          
              <label for="fornecedor">Fornecedor(es): </label>
              <div class="form-group col-md-3">
                 <select class="form-select" name="fornecedor">
                    <option value="1">Fornecedor X</option>
                    <option value="2">Fornecedor Y</option>
                    <option value="3">Fornecedor Z</option>
                    <option value="4">Fornecedor A</option>
                    <option value="5">Fornecedor B</option>
                </select>
              </div>
          
            </div>


            <br>

            <div>
              <input type="submit" class="btn btn-outline-primary" value="Cadastrar">
            </div>
         
            </div>
        </div> 

          </form>

        

<br><br>

</div><br><br>

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