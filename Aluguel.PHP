<br><br>
<table class="table table-hover table-striped" id="Aluguel">
	<thead>
		<tr>
			<th>Cliente</th>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Cor</th>
			<th>Diaria</th>
			<th>Saída</th>
			<th>Entrega</th>
			<th>Usuário</th>
		</tr>
	</thead>
	<tbody>
		<?php
			while ($linha = mysqli_fetch_array($consultar_aluguel)) {
				echo '<tr><td>'.$linha['NOME_CLIENTE'].'</td>';
				echo '<td>'.$linha['MARCA'].'</td>';
				echo '<td>'.$linha['MODELO'].'</td>';
				echo '<td>'.$linha['COR'].'</td>';
				echo '<td>'.'R$'.$linha['diaria'].'</td>';
				echo '<td>'.$linha['DATA_SAIDA'].'</td>';
				echo '<td>'.$linha['DATA_ENTREGA'].'</td>';
				echo '<td>'.$linha['USUARIO'].'</td>';
			
			?>

		<?php
			}

		?>
	</tbody>
	
</table>