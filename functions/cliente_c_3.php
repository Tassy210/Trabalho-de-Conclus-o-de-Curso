<?php   
session_start();

$Contrato =$_POST['contrato'];
$Fornecedor =$_POST['fornecedor'];
$Pagamento =$_POST['pagamento'];
$Levantamento =$_POST['levantamento'];


include("conexao.php");
/*atualiza os novos dados para tabela cliente*/
    $primeiro="UPDATE Cliente SET Contrato='$Contrato',
     Modo_de_pagamento='$Pagamento',Folha_de_levantamento='$Levantamento'
      WHERE CPF_pessoa='".$_SESSION['CPF']."'";
 
        $banco = mysqli_query($con,$primeiro);  
           

            if($banco){

              echo"<script language='javascript' type='text/javascript'>
              alert('Dados cadastrados com sucesso!');window.location.
              href='../home.html'</script>";

            }else{
              echo"<script language='javascript' type='text/javascript'>
              alert('Não foi possível cadastrar os dados');window.location
              .href='cliente_c_4.html'</script>";
            }
?>