<?php   
session_start();
/*Pega os dados do formulario*/
$Nome =$_POST['nome'];
$CEP =$_POST['cep'];
$CPF =$_POST['cpf'];
$Rua =$_POST['rua'];
$Bairro =$_POST['bairro'];
$Cidade =$_POST['cidade'];
$Estado =$_POST['uf'];
$Telefone =$_POST['fone'];
$Obs=$_POST['obs'];
$Vendedor=$_POST['vendedor'];
$_SESSION['CPF']=$CPF;
$Conta_de_energia=$_POST['foto'];
$Num=$_POST['num'];
$UCGD =$_POST['UCGD'];/*Conta a array*/ 
$quant_linhas = count($UCGD);
/*Conecta com o php da conexão*/
include("conexao.php");

/*Verifica se o cliente já foi cadastrado*/
$sql    = 'SELECT CPF_pessoa FROM Pessoa WHERE CPF_pessoa = '.$CPF.'';
$result = $con->query($sql);

if ($result->num_rows > 0) {

      while($row = $result->fetch_assoc()) {
        echo"<script language='javascript' type='text/javascript'>
        alert('Cliente já cadastrado!');window.location.
        href='../venda/cliente_c_1.php'</script>";
}
} else {
 
  /*Caso não tenha, ele insere os dados na tabela sql*/
          $tabela = "INSERT INTO Pessoa(CPF_pessoa,
          Telefone,Nome,Usuários) VALUES ('".$CPF."',
          '".$Telefone."','".$Nome."','Cliente');";

          $query = "INSERT INTO Cliente(CPF_pessoa,CEP,
          Rua,Cidade,Bairro,Estado,Numero,Vendedor,Obs) VALUES ('".$CPF."',
          '".$CEP."','".$Rua."','".$Cidade."',
          '".$Bairro."','".$Estado."','".$Num."','".$Vendedor."','".$Obs."');"; 
          /*Cria um for para salvar multiplos dados de uma vez no sql*/
for ($i=0; $i<$quant_linhas; $i++) {

   $UC_GD="INSERT INTO UCGD(CPF_pessoa,UC_GD,Conta_de_energia) VALUES
   ('".$CPF."','".$UCGD[$i]."','".$Conta_de_energia[$i]."');";
           $UC_ = mysqli_query($con,$UC_GD);

}
$insert = mysqli_query($con,$tabela);
$banco = mysqli_query($con,$query);  
/*Confirma se funcionou ou não e manda pra proxima pagina*/
if($insert&&$banco&&$UC_){

  echo"<script language='javascript' type='text/javascript'>
  alert('Cliente cadastrado com sucesso!');window.location.
  href='cliente_c_2.php'</script>";

}else{
  echo"<script language='javascript' type='text/javascript'>
  alert('Não foi possível cadastrar esse Cliente');window.location
  .href='../functions/cliente_c_1.php'</script>";
}}
?>