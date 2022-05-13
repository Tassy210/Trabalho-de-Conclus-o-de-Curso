<?php  
session_start();
$Email =$_POST['email'];
$Senha =$_POST['senha'];
$Senha_cp=MD5($Senha);
$_SESSION['email']=$Email;

include("conexao.php");
/*Verifica se o email e a senha estão certas*/
$pe    = "SELECT * FROM Pessoa WHERE Email =
    '$Email'";
    $ps = $con->query($pe);

    if ($ps->num_rows > 0) {
       
        while($col = $ps->fetch_assoc()) {
         
            $CPF=$col['CPF_pessoa'];
            $Usuários=$col['Usuários']; 
              $Nome=$col['Nome'];
        
          $cad="SELECT * FROM $Usuários WHERE Email='$Email' AND
             Senha='$Senha_cp'";
         
               $cadas = $con->query($cad);

                  
                    
                      if ($cadas->num_rows > 0) {
        
                        echo"<script language='javascript' type='text/javascript'>
                        alert('Seja Bem Vindo(a) ".$Usuários.", ".$Nome."!');window.location.
                        href='../home.html'</script>";
                                     }else{
                                      echo"<script language='javascript' type='text/javascript'>
                                      alert('Senha ou Email incorretos!');window.location.
                                      href='../index.html'</script>";
                                                   }
                    }}
 
        
?>