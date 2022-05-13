
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

function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    }; 

    var controleCampo = 1;
function adicionarCampo() {
    controleCampo++;
    document.getElementById('formulario').insertAdjacentHTML('beforeend', '<div class="form-control" id="campo' + controleCampo + '"><span id="msgAlerta' + controleCampo  + '" id="nome' + controleCampo + '" <label> UCGD compensação: </label><input type="text" name="uc_c' + controleCampo + '" id="email' + controleCampo + '"" /><input type="hidden" name="id' + controleCampo + '" id="id' + controleCampo + '" /> <button type="button" class="btn btn-danger" id="' + controleCampo + '" onclick="removerCampo(' + controleCampo + ')"> - </button></div>');
    document.getElementById("qnt_campo").value = controleCampo;
}

function removerCampo(idCampo){
    document.getElementById('campo' + idCampo).remove();
}
</script>



<style>

.body{
  background-color: #E0EDFF;

}




</style>
<br>

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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript">
$(function () {
  function removeCampo() {
	$(".removerCampo").unbind("click");
	$(".removerCampo").bind("click", function () {
	   if($("tr.linhas").length > 1){
		$(this).parent().parent().remove();
	   }
	});
  }
 
  $(".adicionarCampo").click(function () {
	novoCampo = $("tr.linhas:first").clone();
	novoCampo.find("input").val("");
	novoCampo.insertAfter("tr.linhas:last");
	removeCampo();
  });
});
</script>
</head>



<body class="body">


<br><br>

<div class="container">

<ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="1-tab" data-toggle="tab" href="cliente_c_1.php" role="tab" aria-controls="home">Cadastro de cliente</a>
          </li>  
        
          <li class="nav-item">
            <a class="nav-link" id="2-tab" data-toggle="tab" href="cliente_c_2.php" role="tab" aria-controls="profile" aria-selected="true">Anexos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="3-tab" data-toggle="tab" href="cliente_c_3.php" role="tab" aria-controls="contact" aria-selected="false">Venda fechada</a>
          </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Dados pessoais: </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>

<br>

  <div class="card">
    <div class="card-body">   
      <div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
</div>  
<br><br>
           <form method="POST" action="../functions/cliente_c_1.php">
            <div class="form-row">
              <div class="form-group col-md-3">
              <label for="nome">Nome: </label>
              <input type="text" class="form-control" name ="nome"required>
            
              <label for="cpf">CPF: </label>
              <input type="text" class="form-control" name ="cpf"required>
          
              </div>
              <br>
              
              <div class="form-row">
  
              <label>CEP:
                <input name="cep" class="form-control" type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" /></label>
                <label>Rua:
                <input name="rua" class="form-control"  type="text" id="rua" size="60" /></label>
                <br>
                <label>Número:
                <input name="num" class="form-control"  type="text" id="num" size="10" /></label>
                <label>Bairro:
                <input name="bairro" class="form-control"  type="text" id="bairro" size="60" /></label><br />
                <label>Cidade:
                <input name="cidade" class="form-control"  type="text" id="cidade" size="60" /></label><br />
                <label>Estado:
                <input name="uf" class="form-control"  type="text" id="uf" size="2" /></label>
            </div>
              <br>   
  
              <div class="form-group col-md-3">
              <label for="fone">Telefone: </label>
              <input type="text" class="form-control" name ="fone" placeholder="(xx)9XXXX-XXXX" required>
              <br><br>
              </div>

<div id="formulario">
  <table border="0" cellpadding="2" cellspacing="4">
    <tr class="linhas">
      <td>  
        <label>UCGD: </label>
        <input type="text" name="UCGD[]">  
      </td>
         <td> <label for="foto">Conta de Luz: </label>

          <input type="file" name="foto[]"></td>
    <td>
          <button type="button" class="adicionarCampo" title="Adicionar item">+</button>
    </td></table>
         
<br>
          
<div>
<div class="form-group col-md-3">
<label for="telhado">Tipo de telhado: </label>
 <select class="form-select" name="telhado" required>
    <option value="f">Fibrocimento</option>
    <option value="m">Madeira</option>
    <option value="c">Cerâmica</option>
    <option value="c2">Concreto</option>
    <option value="m2">Metal</option>
    <option value="s">Solo</option>
    <option value="l">Laje</option>
</select>
</div>

<br><br>

<div class="form-group col-md-3">
<label for="vendedor">Vendedor: </label>
<select class="form-select" name="vendedor">
<?php   
session_start();
include("../functions/conexao.php");
$seleciona = "SELECT * FROM Pessoa WHERE Usuários =
'Vendedor'";
$verifica = $con->query($seleciona);

if ($verifica->num_rows > 0) {
     
  while($row = $verifica->fetch_assoc()) {
    $Nome=$row['Nome'];
    $CPF=$row['CPF_pessoa'];
echo"
      <option value=".$CPF.">".$Nome."</option> ";
  }}
;

  
   ?>
</select>
</div>

<br><br> 

<label for="obs">Observações: </label>

<div class="form-group col-md-7">
<textarea class="form-control" name="obs" id="exampleFormControlTextarea1" rows="4"></textarea>
</div>

<br><br> 

    <tr>
          <td align="right" colspan="4"><input type="submit" id="btn-cadastrar" value="Cadastrar" /></td>
    </tr> 
  </table>
  </form>
  </div>

    <br><br>

    </div>
    </div>
  </div>
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