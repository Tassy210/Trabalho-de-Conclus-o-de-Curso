<?php

session_start();
include 'functions/dbh.php';
$adm =  $_SESSION['nome'];

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql = " UPDATE administrador
set
  nome       = '$nome',
  email      = '$email',
  senha      = '$senha', 
  foto = $_FILES['$arquivo'];
  ";




?>