<br><br>
<a class = "btn btn-success" href="?pagina=inserir_veiculo">Inserir Veiculo</a>
<br><br>
<table class="table table-hover table-striped" id="Veiculos">
	<thead>
	<tr>
		<th>Marca</th>
		<th>Modelo</th>
		<th>Cor</th>
		<th>Ano</th>
		<th>Disponivel</th>
		<th>Diaria</th>
		<th>Editar</th>
		<th>Deletar</th>
	</tr>
	</thead>

	<tbody>
	<?php
		while ($linha = mysqli_fetch_array($consultar_veiculos)) {
			echo '<tr><td>'.$linha['MARCA'].'</td>';
			echo '<td>'.$linha['MODELO'].'</td>';
			echo '<td>'.$linha['COR'].'</td>';
			echo '<td>'.$linha['ANO'].'</td>';
			echo '<td>'.$linha['DISPONIVEL'].'</td>';
			echo '<td>'.'R$'.$linha['diaria'].'</td>';
			
		?>
		<td><a href="?pagina=inserir_veiculo&editar=<?php echo $linha['ID_VEICULO']; ?>">Editar <i class="fas fa-car "></i> </a></td>

		<td><a href="deleta_veiculo.php?ID_VEICULO=<?php echo $linha['ID_VEICULO']; ?>">Deletar <i class="fas fa-trash-alt"></i></a></td></tr>

	<?php

		}
	?>
	</tbody>
</table>
<br><br><br>