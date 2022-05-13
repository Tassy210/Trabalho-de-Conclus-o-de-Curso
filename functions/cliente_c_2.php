<?php   
session_start();


$Materiais =$_POST['materiais'];
$orcamento =$_POST['orcamento'];

include("conexao.php");

            $query="INSERT INTO Orcamento(Material,CPF_pessoa,Custo_do_projeto) VALUES 
            ('".$Materiais."','".$orcamento."','".$orcamento."');";

           
            $banco = mysqli_query($con,$query);  


            if($banco){

              echo"<script language='javascript' type='text/javascript'>
              alert('Dados cadastrados com sucesso!');window.location.
              href='../venda/cliente_c_3.php'</script>";

            }else{
              echo"<script language='javascript' type='text/javascript'>
              alert('Não foi possível cadastrar os dados');window.location
              .href='cliente_c_2.html'</script>";
            }
?>