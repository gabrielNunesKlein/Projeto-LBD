<br><br>
<a class="btn btn-success" href="?pagina=inserir_cliente">Inserir novo cliente</a>
<br><br>
<table class="table table-hover table-striped" id="Clientes">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Renach</th>
			<th>RG</th>
			<th>Editar</th>
			<th>Excluir</th>
		</tr>
	</thead>
	<tbody>
		<?php
			while ($linha = mysqli_fetch_array($consultar_clientes)) {
				echo '<tr><td>'.$linha['NOME_CLIENTE'].'</td>';
				echo '<td>'.$linha['RENACH'].'</td>';
				echo '<td>'.$linha['RG'].'</td>';
			
			?>
			<td><a href="?pagina=inserir_cliente&editar=<?php echo $linha['IDCLIENTE']; ?>">Editar<i class="fas fa-user-edit"> </i>
			</a></td>

			<td><a href="deleta_cliente.php?IDCLIENTE=<?php echo $linha['IDCLIENTE']; ?>">Excluir <i class="fas fa-trash-alt"></a></td></tr>
		<?php		
			}
		?>
	</tbody>
</table>