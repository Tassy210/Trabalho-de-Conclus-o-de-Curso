<?php
include('conexao.php');

$sql = mysqli_query($con, "SELECT CPF_pessoa, Nome FROM Pessoa WHERE Usuários = 'Cliente' order by Nome");

    while($dados = $sql->fetch_assoc()){
        $id = $dados['CPF_pessoa'];
        $nome = $dados['Nome'];
       
        echo "<a href='functions/perfil_cliente.php?CPF_pessoa=$id'><li class='list-group-item list-group-item-action list-group-item-primary' data-bs-toggle='modal' data-bs-target='#exampleModal''>$nome</li></a>";


      
               
             
        
            
    };
    
        

?>