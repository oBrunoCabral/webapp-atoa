<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE) ?>	

<?php
	$nomeProduto = $_POST['nomeProd'];
	$queryInsert = "INSERT INTO dados_produtos (descricao) VALUES ('$nomeProduto')";
	$resultInsert = mysqli_query($conexao, $queryInsert);

	if ($conexao){

		if($resultInsert) {
			echo '<h1 style="text-align: center;">Cadastro Realizado com Sucesso</h1>
				  <<h3 style="text-align: center;"> Você será redirecionado em Instantes <br> <i style="text-align: center;" class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></h3>';


			header( "refresh:2;url=index.php" );

		}
	}
	else{
		die("Erro ao conectar no banco de dados: " . mysqli_connect_error());
	}
?>


<?php include(FOOTER_TEMPLATE) ?>