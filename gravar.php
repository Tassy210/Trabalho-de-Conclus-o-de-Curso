<?php

include 'functions/dbh.php';

$imagem = mysqli_real_escape_string($connect, $_FILES["foto"]);

if($imagem != NULL) {
	$nomeFinal = time().'.jpg';
	if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
		$tamanhoImg = filesize($nomeFinal);

        $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
        
		mysql_query("INSERT INTO administrador (PES_IMG) VALUES ('$mysqlImg')") or
		die("O sistema não foi capaz de executar a query");

		unlink($nomeFinal);

		header("location:exibir.php");
	}
}
else {
	echo"Você não realizou o upload de forma satisfatória.";
}

?>