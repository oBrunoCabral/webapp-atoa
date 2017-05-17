<?php
	// definições de host, database, usuário e senha
	$host = "localhost";
	$db   = "db_app";
	$user = "root";
	$pass = "";
	// conecta ao banco de dados
	$conexao = 	mysqli_connect($host, $user, $pass, $db);
	if (!$conexao) {
		die("Erro ao conectar no banco de dados: " . mysqli_connect_error());
	}


	$querySelect = "SELECT * from dados_produtos ORDER BY codigo";
	$resultSelect = mysqli_query($conexao, $querySelect);

	
	//mysqli_close($conexao);

?>