<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
      
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/style.css">
  
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
      
      
      <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
      <script src="js/bootstrap.bundle.js" ></script>
      <script src="js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"></script>
      <script src="js/bootstrap.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" ></script>
  

        
        <style>
  
            .body{
              background-color: #E0EDFF;
            
            }
            
            
            
            
            </style>
<script>


  var exampleModal = document.getElementById('exampleModal')
  exampleModal.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient = button.getAttribute('data-bs-whatever')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle = exampleModal.querySelector('.modal-title')
    var modalBodyInput = exampleModal.querySelector('.modal-body input')
  
    modalTitle.textContent = 'New message to ' + recipient
    modalBodyInput.value = recipient
  })
  
  
      </script>

    </head>

    <body class="body">

      <div class="container" >
        <div class="card" style="background-color: #A8C1FF;">
          <div class="card-body">  
           <h2 style="color: #ffffff;">Orçamentos</h2>
           <p style="color: #ffffff;">Tela de orçamentos realizados</p>
           <div class="input-group flex-nowrap">
            <a href="home.html"><i class="bi bi-house"></i></a>
          </div>
          </div>
        </div>
      </div> 


        <br><br>


        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-header">Alteração</div>
          <div class="card-body">
            <h5 class="card-title"  style="color:#E0EDFF">Alteração</h5>
            <ul class="list-group">
           


            </ul>
          </div>
        </div>

        <br>

        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
          <div class="card-header" >Prontos</div>
          <div class="card-body">
            <h5 class="card-title" style="color:#E0EDFF">Prontos</h5>
            <ul class="list-group">
              <li class="list-group-item list-group-item-action list-group-item-primary">Cliente Ω</li>
              <li class="list-group-item list-group-item-action list-group-item-primary">Cliente Δ</li>
              <li class="list-group-item list-group-item-action list-group-item-primary">Cliente β</li>
            </ul>
          </div>
        </div>

        <br>

        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
          <div class="card-header">Acompanhamento</div>
          <div class="card-body">
            <h5 class="card-title" style="color:#E0EDFF">Acompanhamento</h5>
              <ul class="list-group">

                
     <?php 
        
        include_once("functions/cliente_orcamento.php");

        ?>

      
                

                <li class="list-group-item list-group-item-action list-group-item-success">Cliente C</li>
              </ul>
          </div>
        </div>


    </body>

</html>