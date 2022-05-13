<?php   
session_start();

$Tipo =$_POST['tipo'];
$Quantidade =$_POST['qtd'];
$Fornecedor =$_POST['Forn'];
$ADD =$_POST['add'];



include("conexão.php");

            $tabela = "INSERT INTO Estoque(
            Tipo_material,Nome_fornecedor,Adicional,Quantidade) VALUES (
            '".$Tipo."','".$Fornecedor."','".$ADD."','".$Quantidade."');";
 

            $insert = mysqli_query($con,$tabela);
        


            if($insert){

              echo"<script language='javascript' type='text/javascript'>
              alert('Dados Atualizado com sucesso!');window.location.
              href='perfil_cliente.php'</script>";

            }else{
              echo"<script language='javascript' type='text/javascript'>
              alert('Não foi possível cadastrar esses dados');window.location
              .href='comercial.html'</script>";
            }
?>