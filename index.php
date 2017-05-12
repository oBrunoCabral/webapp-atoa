<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE) ?>	

	<div class="container">

			<table class="table" style="border: 1px, black;">
				<thead>
					<th>th1</th>
					<th>th2</th>
				</thead>
				<tbody>
					<tr>
						<td>td1</td>
						<td>td2</td>
					</tr>
				</tbody>
			</table>
	<div id="teste" style="
			border: 2px solid green;
			width: 100px;
			height: 100px;
			background-color: gray;	"		>
	</div>

			<br>
			<br>
			
<button>esconde</button>
<!-- <button id="btmostra">mostra</button> -->
			
		</div>
	</div>


<?php include(FOOTER_TEMPLATE) ?>