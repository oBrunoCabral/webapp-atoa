<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE) ?>	

<?php
	$nomeProdAtual = $_POST['Produtos'];
	$queryDelete = "DELETE FROM dados_produtos WHERE descricao = '$nomeProdAtual'";

	$resultDelete = mysqli_query($conexao, $queryDelete);

	if ($conexao){

		if($resultDelete) {
			echo '<h1 style="text-align: center;">Cadastro Removido com Sucesso</h1>
				  <h3 style="text-align: center;"> Você será redirecionado em Instantes <br> <i style="text-align: center;" class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></h3>
				  ';
			header( "refresh:2;url=index.php" );

		}
	}
	else{
		die("Erro ao conectar no banco de dados: " . mysqli_connect_error());
	}
?>

<?php include(FOOTER_TEMPLATE) ?>