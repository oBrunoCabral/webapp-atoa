<?php

	// definições de host, database, usuário e senha
	$host = "localhost";
	$db   = "db_app";
	$user = "root";
	$pass = "";
	// conecta ao banco de dados
	$conexao = mysqli_connect($host, $user, $pass, $db);
	//$query = ;
	
	//$resultado = mysqli_query($conexao, $query);
	
	mysqli_close($conexao);

?>