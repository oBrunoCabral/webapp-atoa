<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE) ?>

	<div class="container">
			<div class="row">		
				<div id="botoes">
					<button id="btnMostraTabela" class="btn btn-primary">
						<i class="fa fa-file-text-o" aria-hidden="true"></i> Exibir Produtos
					</button>
					<button id="btnAtualizaDiv" class="btn btn-primary" style="display: none;">
						<i class="fa fa-refresh" aria-hidden="true"></i> Atualizar Tabela
					</button>					
					<button id="btnInsereProduto" class="btn btn-success" data-toggle="modal" data-target="#modalInsereProd">
						<i class="fa fa-plus-square-o" aria-hidden="true"></i> Inserir produto
					</button>
					<button id="btnEditaProduto" class="btn btn-warning" data-toggle="modal" data-target="#modalEditaProd">
						<i class="fa fa-pencil" aria-hidden="true""></i> Editar produto
					</button>
					<button id="btnExcluiProd" class="btn btn-danger" data-toggle="modal" data-target="#modalExcluiProd">
						<i class="fa fa-window-close" aria-hidden="true""></i> Excluir produto
					</button>	
				</div>
			</div>


		<table id="tblProd" class="table table-sm" style="margin-top: 2em; display: none;">
		  <thead class="thead-inverse">
		  	<th class="table-info" style="text-align: center;" colspan="2">Tabela de Produtos</th>
		    <tr>
		      <th style="text-align: center;">Código</th>
		      <th style="text-align: center;">Produto</th>
		    </tr>
		  </thead>
		  <tbody>
<?php   
	if($resultSelect) {
		while ($rows = mysqli_fetch_array($resultSelect)){
?>			  
		    <tr>
		      <td id="<?php echo utf8_encode($rows['codigo']); ?>" style="text-align: center;"><?php echo utf8_encode($rows['codigo']) ?></td>
		      <td style="text-align: center;"><?php echo utf8_encode($rows['descricao']) ?></td>
		    </tr>
<?php
		}
 	}
?>
		  </tbody>
		</table>
	</div>


	<!--  MODAL CADASTRO DE PRODUTO -->
	<div class="modal fade" id="modalInsereProd" role="dialog" aria-labelledby="Modal Insere Produto" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Novo Produto: </h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      <!-- FORMULARIO PARA CADASTRO DE PRODUTO -->
	        <form action="insere.php" method="POST">
	        	<label>Nome do Produto</label>
	        	<input type="text" name="nomeProd" required>
	        	<br>
	        	<button type="submit" class="btn btn-primary">Confirmar</button>	        	
	        </form> <!--  FIM DO FORMULARIO -->
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>    
	      </div>
	    </div>
	  </div>
	</div><!-- FIM MODAL CADASTRO -->

	<!--  MODAL EDITA PRODUTO -->
	<div class="modal fade" id="modalEditaProd" role="dialog" aria-labelledby="Edição de Produto" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Editar Produto: </h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      <!-- FORMULARIO PARA EDIÇÃO DE PRODUTO -->
	        <form action="atualiza.php" method="POST">
	        	<label>Selecione o Produto</label>
	        	<select name="Produtos" required>
				<?php
					//conectar ao banco e popular o dropdown com o nome dos produtos
					$conexao = 	mysqli_connect($host, $user, $pass, $db);				
				   	$querySelect = "SELECT descricao from dados_produtos order by descricao";
					$resultSelect = mysqli_query($conexao, $querySelect);
					
					if($resultSelect) {
						while ($rows = mysqli_fetch_array($resultSelect)){
				?>			  
							<option value="<?php echo utf8_encode($rows['descricao']) ?>">
								<?php echo utf8_encode($rows['descricao']) ?>
							</option>
				<?php
						}
				 	}
				?>
				</select>
				<br>
	        	<label style="display: inline;">Informe Um Novo Nome</label>				
				<input type="text" name="prodNovoNome" value="" required>
	        	<button type="submit" class="btn btn-primary">Confirmar</button>				
	        </form> <!--  FIM DO FORMULARIO -->
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>    
	      </div>
	    </div>
	  </div>
	</div><!-- FIM MODAL CADASTRO -->

		<!--  MODAL EXCLUI PRODUTO -->
	<div class="modal fade" id="modalExcluiProd" role="dialog" aria-labelledby="Exclusão de Produto" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Editar Produto: </h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      <!-- FORMULARIO PARA EDIÇÃO DE PRODUTO -->
	        <form action="deleta.php" method="POST">
	        	<label>Selecione o Produto ser Excluído</label>
	        	<select name="Produtos" required>
				<?php
					//conectar ao banco e popular o dropdown com o nome dos produtos
					$conexao = 	mysqli_connect($host, $user, $pass, $db);				
				   	$querySelect = "SELECT descricao from dados_produtos order by descricao";
					$resultSelect = mysqli_query($conexao, $querySelect);
					
					if($resultSelect) {
						while ($rows = mysqli_fetch_array($resultSelect)){
				?>			  
							<option value="<?php echo utf8_encode($rows['descricao']) ?>">
								<?php echo utf8_encode($rows['descricao']) ?>
							</option>
				<?php
						}
				 	}
				?>
				</select>
				<br>
	        	<button type="submit" class="btn btn-danger">Excluir</button>				
	        </form> <!--  FIM DO FORMULARIO -->
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>    
	      </div>
	    </div>
	  </div>
	</div><!-- FIM MODAL EXCLUI -->	

<?php include(FOOTER_TEMPLATE) ?>




		
