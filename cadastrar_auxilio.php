<?php

include "functions/dbh.php"; 

$aluno = $_POST['estudante'];
$tipo = $_POST['tipo']; 

$l1 = $_POST['L1'];
$l2 = $_POST['L2'];
$l5 = $_POST['L5'];
$l6 = $_POST['L6'];
$l9 = $_POST['L9']; 
$l10 = $_POST['L10'];
$l13 = $_POST['L13'];
$l14 = $_POST['L14'];

$id_aluno = $_POST['id_aluno'];

$sql = "INSERT INTO auxilios (estudante, tipo, l1, l2, l5, l6, l9, l10, l13, l14) values ($aluno, $tipo, $l1, $l2, $l5, $l6, $l9, $l10, $l13, $l14) " ; 
$query = mysqli_query($connect, $sql); 

echo $sql; 



?>