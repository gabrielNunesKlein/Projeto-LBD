<?php if(!isset($_GET['editar'])){  ?>

<h1>Inserir Novo Cliente</h1>
<form method="post" action="processa_cliente.php">
	<br>
	<label class="badge badge-secondary">Nome</label><br>
	<input class="form-control" type="text" name="NOME_CLIENTE" placeholder="Inserir Nome"><br>

	<label class="badge badge-secondary">Renach</label><br>
	<input type="text" name="RENACH" placeholder="Inserir Renach"><br><br>

	<label class="badge badge-secondary">RG</label><br>
	<input type="text" name="RG" placeholder="Inserir RG"><br><br>

	<label class="badge badge-secondary">Data de Saída</label><br>
	<input type="text" name="DATA_SAIDA" placeholder="Saida"><br><br>

	<label class="badge badge-secondary">Perevisão de Entrega</label><br>
	<input type="text" name="DATA_ENTREGA" placeholder="Entrega"><br><br>

	<p class="badge badge-secondary">Selecione Veiculo</p>
	<select class="form-control" name="escolha_veiculo">
		<option>Veículos</option>
		<?php 
		while($linha = mysqli_fetch_array($consultar_veiculos)){
			echo '<option value="'.$linha['ID_VEICULO'].'">'.$linha['MARCA']."/ " .$linha['MODELO']."/ ".$linha['COR']."/ ".$linha['DISPONIVEL'].'</option>';
		}
		?>
	</select><br><br>

	<p class="badge badge-secondary">Usuário</p>
	<select class="form-control" name="escolha_usuario">
		<option>Usuários</option>
		<?php 
		while($linha = mysqli_fetch_array($consultar_usuario)){
			echo '<option value="'.$linha['id_usuario'].'">'.$linha['usuario'].'</option>';
		}
		?>
	</select><br><br>
	
	<br><br>
	<input class="btn btn-success" type="submit" value="Cadastrar Cliente">
	<br><br>
</form>

<?php } else { ?>
<?php while ($linha = mysqli_fetch_array($consultar_clientes)) { ?>
	<?php if($linha['IDCLIENTE'] == $_GET['editar']){ ?> 
	<h1>Editar Cliente</h1>
	<form method="post" action="edita_cliente.php">
		<input type="hidden" name="IDCLIENTE" value="<?php echo $linha['IDCLIENTE']; ?>">
	<br>
	<br>
	<label class="badge badge-secondary">Nome</label><br>
	<input class="form-control" type="text" name="NOME_CLIENTE" placeholder="Inserir Nome" value="<?php echo $linha['NOME_CLIENTE']; ?>"> <br>

	<label class="badge badge-secondary">Renach</label><br>
	<input type="text" name="RENACH" placeholder="Inserir Renach" value="<?php echo $linha['RENACH']; ?>"><br><br>

	<label class="badge badge-secondary">RG</label><br>
	<input type="text" name="RG" placeholder="Inserir RG" value="<?php echo $linha['RG']; ?>"><br><br>

	<label class="badge badge-secondary">Data de Saída</label><br>
	<input type="text" name="DATA_SAIDA" placeholder="Saida" value="<?php echo $linha['DATA_SAIDA']; ?>"><br><br>

	<label class="badge badge-secondary">Perevisão de Entrega</label><br>
	<input type="text" name="DATA_ENTREGA" placeholder="Entrega" value="<?php echo $linha['DATA_ENTREGA']; ?>"><br><br>

	<p class="badge badge-secondary">Selecione Veiculo</p>
	<select class="form-control" name="escolha_veiculo">
		<option>Selecione um veiculo</option>
		<?php 
		while($linha = mysqli_fetch_array($consultar_veiculos)){
			echo '<option value="'.$linha['ID_VEICULO'].'">'.$linha['MARCA']."  " .$linha['MODELO'].$linha['COR']."/ ".$linha['DISPONIVEL'].'</option>';
		}
		?>
	</select>
	<br><br>
	<p class="badge badge-secondary">Usuário</p>
	<select class="form-control" name="escolha_usuario">
		<option>Usuários</option>
		<?php 
		while($linha = mysqli_fetch_array($consultar_usuario)){
			echo '<option value="'.$linha['id_usuario'].'">'.$linha['usuario'].'</option>';
		}
		?>
	</select><br><br>
	
	<br><br>
	
	<input class="btn btn-success" type="submit" value="Editar Cliente">
	<br><br>
</form>
		<?php } ?>
		<?php } ?>
<?php } ?>
