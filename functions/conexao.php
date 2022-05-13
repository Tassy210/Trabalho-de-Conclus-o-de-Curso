<?php
/*Faz a conexão com o banco*/
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'EnergiaSolar';
$con = new mysqli($servidor, $usuario, $senha, $banco);
/*Verifica se deu certo*/
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}

?>