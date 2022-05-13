
<?php  
session_start();
$Nome =$_POST['Nome'];
$Telefone =$_POST['fone'];
$CPF =$_POST['CPF'];
$Categoria =$_POST['Categoria'];
$RG =$_POST['RG'];
$Email =$_POST['email'];
$Senha = $_POST['senha'];
$senha_cp=md5($Senha);
include("conexão.php");

  $chave = rand(1,100);
  $sql    = 'SELECT CPF_pessoa FROM Pessoa WHERE CPF_pessoa = '.$CPF.'';
  $result = $con->query($sql);
  
  if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuario já cadastrado!');window.location.
          href='cadastro_funcionario.html'</script>";
}
} else {

            $usuario = "INSERT INTO Pessoa(CPF_pessoa,
            Telefone,Nome,Email,Usuários) VALUES ('".$CPF."',
            '".$Telefone."','".$Nome."','".$Email."','".$Categoria."');";
            $inclui = mysqli_query($con,$usuario);

            $tipo = "INSERT INTO $Categoria (ID_$Categoria,CPF_$Categoria,Email,Senha) 
                        VALUES ('".$chave."','".$CPF."','".$Email."','".$senha_cp."');";
            $ti = mysqli_query($con,$tipo);

            if($inclui&&$ti){

              echo"<script language='javascript' type='text/javascript'>
              alert('Usuario cadastrado com sucesso!');window.location.
              href='  index.html'</script>";

            }else{
              echo"<script language='javascript' type='text/javascript'>
              alert('Não foi possível cadastrar ');window.location
              .href='cadastro_funcionario.html'</script>";
            }}
?>