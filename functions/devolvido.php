
<?php 
session_start();
$id_ca = $_POST['data'];

$id = json_decode($id_ca, true);

$titulo = $_POST['data'];

$dados = json_decode($titulo, true);
var_dump($dados);
echo "<td><a href='perfil_cliente.php?id=$id'>$dados<a></td>";
    

?>